<?php
class UserService
{
    public static function login($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $userDao = new UserDao($adapter);
        $result = [
            'status' => 'error',
            'message' => 'Usuario o contraseña incorrectos',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['user_user'],
            $_POST['user_pass']
        )) {
            $user_user = $_POST['user_user'];
            $user_pass = $_POST['user_pass'];
            $user_r = $userDao->login($user_user, addslashes($user_pass));
            if (
                $user_r != false &&
                $user_r['user_user'] == $user_user &&
                $user_r['user_pass'] == $user_pass
            ) {
                $_SESSION['user_id'] = $user_r['user_id'];
                $_SESSION['user_name'] = $user_r['user_name'];
                $_SESSION['user_user'] = $user_r['user_user'];
                $_SESSION['user_pass'] = $user_r['user_pass'];

                $result = [
                    'status' => 'success',
                    'message' => 'Bienvenido al sistema',
                    'response' => true,
                    'data' => [
                        'user_id' => $user_r['user_id'],
                        'user_name' => $user_r['user_name'],
                        'user_user' => $user_r['user_user']
                    ]
                ];
            }
        }
        echo json_encode($result);
    }

    public static function logout()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        session_destroy();
        echo json_encode([
            'status' => 'success',
            'message' => 'Sesión cerrada',
            'response' => true,
            'data' => null
        ]);
        exit();
    }
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $userDao = new UserDao($adapter);
        $users = $userDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Usuarios obtenidos correctamente',
            'response' => true,
            'data' => $users
        ]);
    }
    public static function register($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para registrar el usuario',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['user_names'],
            $_POST['user_surnames'],
            $_POST['user_cedula'],
            $_POST['user_email'],
            $_POST['user_pass'],
            $_POST['user_level'],
            $_POST['user_sex'],
            $_POST['user_phone']
        )) {
            $userDao = new UserDao($adapter);
            $user_names = $_POST['user_names'];
            $user_surnames = $_POST['user_surnames'];
            $user_cedula = $_POST['user_cedula'];
            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];
            $user_level = $_POST['user_level'];
            $user_sex = $_POST['user_sex'];
            $user_phone = $_POST['user_phone'];
            $user = $userDao->register(
                $user_names,
                $user_surnames,
                $user_cedula,
                $user_email,
                $user_pass,
                $user_level,
                $user_sex,
                $user_phone
            );
            $result['status'] = 'success';
            $result['message'] = 'Usuario registrado correctamente';
            $result['response'] = true;
            $result['data'] = $user;
        }
        echo json_encode($result);
    }
    // public static function insert($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Faltan datos para ingresar el usuario',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset(
    //         $_POST['user_name'],
    //         $_POST['user_user'],
    //         $_POST['user_pass']
    //     )) {
    //         $userDao = new UserDao($adapter);
    //         $user_name = $_POST['user_name'];
    //         $user_user = $_POST['user_user'];
    //         $user_pass = $_POST['user_pass'];
    //         $user = $userDao->insert(
    //             $user_name,
    //             $user_user,
    //             $user_pass
    //         );
    //         $result['status'] = 'success';
    //         $result['message'] = 'Usuario insertado correctamente';
    //         $result['response'] = true;
    //         $result['data'] = $user;
    //     }
    //     echo json_encode($result);
    // }

    // public static function update($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Faltan datos para actualizar el usuario',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset(
    //         $_POST['user_name'],
    //         $_POST['user_user'],
    //         $_POST['user_pass'],
    //         $_POST['user_id']
    //     )) {
    //         $userDao = new UserDao($adapter);

    //         $user_id = $_POST['user_id'];
    //         $current_user = $userDao->selectById($user_id);
    //         if (!$current_user) {
    //             $result['message'] = 'El usuario no existe';
    //             echo json_encode($result);
    //             exit();
    //         }

    //         $user_name = $_POST['user_name'];
    //         $user_user = $_POST['user_user'];
    //         $user_pass = $_POST['user_pass'];
    //         $user_id = $_POST['user_id'];

    //         $user = $userDao->update(
    //             $user_name,
    //             $user_user,
    //             $user_pass,
    //             $user_id
    //         );
    //         $result['status'] = 'success';
    //         $result['message'] = 'Usuario actualizado correctamente';
    //         $result['response'] = true;
    //         $result['data'] = $user;
    //     }
    //     echo json_encode($result);
    // }

    // public static function delete($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Faltan datos para eliminar el usuario',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset($_POST['user_id'])) {
    //         $userDao = new UserDao($adapter);
    //         $user_id = $_POST['user_id'];
    //         $user = $userDao->selectById($user_id);
    //         if (!$user) {
    //             $result['message'] = 'El usuario no existe';
    //             echo json_encode($result);
    //             exit();
    //         }
    //         $userDao->delete($user_id);
    //         $result['status'] = 'success';
    //         $result['message'] = 'Usuario eliminado correctamente';
    //         $result['response'] = true;
    //     }
    //     echo json_encode($result);
    // }
}
