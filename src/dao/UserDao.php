<?php
class UserDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM users");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->prepareRecord($row);
        }
        return $result;
    }

    public function selectById($user_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM users WHERE user_id = $user_id");
        $row = mysqli_fetch_assoc($resultset);
        return $this->prepareRecord($row);
    }

    public function selectByCode($user_code)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM users WHERE user_code = '$user_code'");
        $row = mysqli_fetch_assoc($resultset);
        return $this->prepareRecord($row);
    }

    public function isRegistered($user_email, $user_cedula)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM users WHERE user_email = '$user_email' OR user_cedula = '$user_cedula'");
        if (mysqli_num_rows($resultset) > 0) {
            $user = mysqli_fetch_assoc($resultset);
            return $this->prepareRecord($user);
        }
        return false;
    }

    public function login($user_user, $user_pass)
    {
        $result = $this->mysqlAdapter->query("
            SELECT * FROM users 
            WHERE user_user = '$user_user' AND user_pass = '$user_pass'
        ");
        if (mysqli_num_rows($result) <= 0) return false;
        $row = mysqli_fetch_assoc($result);
        return $this->prepareRecord($row);
    }

    public function register(
        $user_names,
        $user_surnames,
        $user_cedula,
        $user_email,
        $user_pass,
        $user_level,
        $user_sex,
        $user_phone
    ) {
        $user_pass = md5($user_pass);
        $user_code = getUniqueKey();
        $user_last = date('Y-m-d H:i:s');
        $user_created = date('Y-m-d H:i:s');


        // query 1
        $result = $this->mysqlAdapter->query("
            INSERT INTO users (
                user_names,
                user_surnames,
                user_cedula,
                user_email,
                user_pass,
                user_level,
                user_sex,
                user_phone,
                user_code,
                user_last,
                user_created
            ) VALUES (
                '$user_names',
                '$user_surnames',
                '$user_cedula',
                '$user_email',
                '$user_pass',
                $user_level,
                '$user_sex',
                '$user_phone',
                '$user_code',
                '$user_last',
                '$user_created'
            );
        ");
        if (!$result) return false;

        // query 2
        $user_id = $this->mysqlAdapter->getLastId();

        // query 3
        $user_user = $this->getUsername($user_names, $user_surnames, $user_id);

        // query 4
        $result = $this->update_userName_byId($user_id, $user_user);

        if (!$result) return false;
        return $this->selectById($user_id);
    }



    // public function insert(
    //     $user_name,
    //     $user_user,
    //     $user_pass
    // ) {
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO user SET 
    //             user_name='$user_name', 
    //             user_user='$user_user',
    //             user_pass='$user_pass'
    //     ");
    // }

    // public function update(
    //     $user_name,
    //     $user_user,
    //     $user_pass,
    //     $user_id
    // ) {
    //     return $this->mysqlAdapter->query("
    //         UPDATE users SET 
    //             user_name='$user_name', 
    //             user_user='$user_user',
    //             user_pass='$user_pass'
    //         WHERE user_id = $user_id 
    //     ");
    // }

    public function update_userName_byId($user_id, $user_user)
    {
        return $this->mysqlAdapter->query("UPDATE users SET user_user='$user_user' WHERE user_id = $user_id ");
    }

    public function confirm($user_id)
    {
        return $this->mysqlAdapter->query("UPDATE users SET user_email_verified = 1 WHERE user_id = $user_id ");
    }




    public function deleteById($user_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM users WHERE user_id = $user_id ");
    }





    // preparar datos consultados en la base de datos de un usuario
    private function prepareRecord($row)
    {
        if (!$row) return false;
        // Result
        $result = [];

        // Prepare shortname
        $result['user_shortname'] = explode(' ', $row['user_names'])[0] . ' ' . explode(' ', $row['user_surnames'])[0];

        // Prepare password
        $result['user_pass'] = '********';

        // Prepare level
        $result['user_level_name'] = 'Ninguno';
        if ($row['user_level'] == 1) $result['user_level_name'] = 'Primaria';
        if ($row['user_level'] == 2) $result['user_level_name'] = 'Secundaria';
        if ($row['user_level'] == 3) $result['user_level_name'] = 'Superior';

        // Prepare sex
        $result['user_sex_name'] = "Ninguno";
        if ($row['user_sex'] == "F") $result['user_sex_name'] =  'Femenino';
        if ($row['user_sex'] == "M") $result['user_sex_name'] =  'Masculino';

        // Prepare type
        $result['user_type_name'] = "Estudiante";
        if ($row['user_type'] == 2) $result['user_type_name'] = "Profesor";
        if ($row['user_type'] == 3) $result['user_type_name'] = "Administrador";

        // Prepare photo
        $result['user_photo_url'] = $_ENV['HTTP_DOMAIN'] . "public/uploads/img.users/default.png";
        if ($row['user_photo'] != "" && $row['user_photo'] != null) $result['user_photo_url'] = $_ENV['HTTP_DOMAIN'] . "public/uploads/img.users/" . $row['user_photo'];

        // Prepare status
        $result['user_status_name'] = "Inactivo";
        if ($row['user_status'] == 1) $result['user_status_name'] = "Activo";

        return array_merge($row, $result);
    }

    private function getUsername($user_names, $user_surnames, $user_id)
    {
        if ($user_id < 10) $user_id = '0' . $user_id;
        return explode(' ', $user_names)[0] .  explode(' ', $user_surnames)[0] . $user_id;
    }
}
