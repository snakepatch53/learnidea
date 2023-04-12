<?php
class SliderImgService
{
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $sliderImgDao = new SliderImgDao($adapter);
        $sliders = $sliderImgDao->select();
        $result = [
            'status' => 'success',
            'message' => 'Slides obtenidos correctamente',
            'response' => true,
            'data' => $sliders
        ];
        echo json_encode($result);
    }

    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar el slide',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['slider_img_title'],
            $_FILES['slider_img']
        )) {
            $adapter = $DATA['mysqlAdapter'];
            $sliderImgDao = new SliderImgDao($adapter);
            $slider_img_title = $_POST['slider_img_title'];
            $slider_img_desc = "";
            $slider_img_url = uploadFIle($_FILES['slider_img'], './public/img.slider/');
            $slider_id = $sliderImgDao->insert(
                $slider_img_title,
                $slider_img_desc,
                $slider_img_url
            );
            $result['status'] = 'success';
            $result['message'] = 'Slide insertado correctamente';
            $result['response'] = true;
            $result['data'] = $slider_id;
        }
        echo json_encode($result);
    }

    public static function update($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para actualizar el slide',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['slider_img_id'],
            $_POST['slider_img_title'],
            $_FILES['slider_img']
        )) {
            $adapter = $DATA['mysqlAdapter'];
            $sliderImgDao = new SliderImgDao($adapter);
            $slider_img_id = $_POST['slider_img_id'];

            $current_slider = $sliderImgDao->selectById($slider_img_id);

            if (!$current_slider) {
                $result['message'] = 'No existe el slide';
                echo json_encode($result);
                return;
            }

            $slider_img_title = $_POST['slider_img_title'];
            $slider_img_desc = "";
            $slider_img_url = $current_slider['slider_img_url'];

            if (isset($_FILES['slider_img'])) {
                deleteFile('./public/img.slider/' . $slider_img_url);
                $slider_img_url = uploadFIle($_FILES['slider_img'], './public/img.slider/');
            }

            $sliderImgDao->update(
                $slider_img_id,
                $slider_img_title,
                $slider_img_desc,
                $slider_img_url
            );
            $result['status'] = 'success';
            $result['message'] = 'Slide actualizado correctamente';
            $result['response'] = true;
            $result['data'] = $slider_img_id;
        }
        echo json_encode($result);
    }

    public static function delete($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para eliminar el slide',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['slider_img_id'])) {
            $adapter = $DATA['mysqlAdapter'];
            $sliderImgDao = new SliderImgDao($adapter);
            $slider_img_id = $_POST['slider_img_id'];
            $current_slider = $sliderImgDao->selectById($slider_img_id);
            if (!$current_slider) {
                $result['message'] = 'No existe el slide';
                echo json_encode($result);
                return;
            }

            $sliderImgDao->delete($slider_img_id);
            if (
                $current_slider['slider_img_url'] != '1.png' &&
                $current_slider['slider_img_url'] != '2.png' &&
                $current_slider['slider_img_url'] != '3.png'
            ) {
                deleteFile('./public/img.slider/' . $current_slider['slider_img_url']);
            }
            $result['status'] = 'success';
            $result['message'] = 'Slider eliminado correctamente';
            $result['response'] = true;
            $result['data'] = $slider_img_id;
        }
        echo json_encode($result);
    }
}
