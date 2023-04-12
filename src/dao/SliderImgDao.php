<?php
class SliderImgDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }
    public function getLastId()
    {
        return $this->mysqlAdapter->getLastId();
    }

    public function select()
    {
        $result = $this->mysqlAdapter->query("SELECT * FROM slider_imgs");
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function selectById($id)
    {
        $result = $this->mysqlAdapter->query("
            SELECT * FROM slider_imgs
            WHERE slider_img_id = $id
        ");
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function insert(
        string $slider_img_title,
        string $slider_img_desc,
        string $slider_img_url
    ) {
        $slider_img_last = date('Y-m-d H:i:s');
        $slider_img_created = date('Y-m-d H:i:s');
        return $this->mysqlAdapter->query("
            INSERT INTO slider_imgs (
                slider_img_url,
                slider_img_title,
                slider_img_desc,
                slider_img_last,
                slider_img_created
            ) VALUES (
                '$slider_img_url',
                '$slider_img_title',
                '$slider_img_desc',
                '$slider_img_last',
                '$slider_img_created'
            )
        ");
    }

    public function update(
        string $slider_img_id,
        string $slider_img_title,
        string $slider_img_desc,
        string $slider_img_url
    ) {
        $slider_img_last = date('Y-m-d H:i:s');
        return $this->mysqlAdapter->query("
            UPDATE slider_imgs SET 
                slider_img_url = '$slider_img_url',
                slider_img_title = '$slider_img_title',
                slider_img_desc = '$slider_img_desc',
                slider_img_last = '$slider_img_last'
            WHERE slider_img_id = '$slider_img_id'
        ");
    }

    public function delete($id)
    {
        return $this->mysqlAdapter->query("
            DELETE FROM slider_imgs
            WHERE slider_img_id = $id
        ");
    }
}
