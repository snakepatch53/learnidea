-- DROP TABLE IF EXISTS info;
-- CREATE TABLE info (
--     info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
--     info_name VARCHAR(50),
--     info_country VARCHAR(50),
--     info_province VARCHAR(50),
--     info_city VARCHAR(50),
--     info_address VARCHAR(50),
--     info_location TEXT,
--     info_phone VARCHAR(15),
--     info_cellphone VARCHAR(15),
--     info_email VARCHAR(50),
--     info_desc TEXT,
--     info_mision TEXT,
--     info_vision TEXT,
--     info_slider_title VARCHAR(50),
--     info_slider_desc TEXT,
--     info_last VARCHAR(50),
--     info_created VARCHAR(50)
-- ) ENGINE INNODB;
-- INSERT INTO
--     info
-- VALUESDROP TABLE IF EXISTS info;
-- CREATE TABLE info (
--     info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
--     info_name VARCHAR(50),
--     info_country VARCHAR(50),
--     info_province VARCHAR(50),
--     info_city VARCHAR(50),
--     info_address VARCHAR(50),
--     info_location TEXT,
--     info_phone VARCHAR(15),
--     info_cellphone VARCHAR(15),
--     info_email VARCHAR(50),
--     info_desc TEXT,
--     info_mision TEXT,
--     info_vision TEXT,
--     info_slider_title VARCHAR(50),
--     info_slider_desc TEXT,
--     info_last VARCHAR(50),
--     info_created VARCHAR(50)
-- ) ENGINE INNODB;
-- INSERT INTO
--     info
-- VALUES
--     (
--         1,
--         'Moronanet',
--         'Ecuador',
--         'Morona Santiago',
--         'Macas',
--         'Soasti y Cuenca',
--         '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3!2d-78.11825101337976!3d-2.30215443949185!2m3!1f52.67314464226125!2f80.41061151369871!3f0!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x91d20f3956994643%3A0xa7d12b2dd5950974!2sMORONA%20NET!5e0!3m2!1ses!2sec!4v1671211259291!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
--         '304 6355',
--         '098 807 8711',
--         'info@moronanet.com',
--         'Morona NET inicia sus actividades en el 2018 brindando servicio de Internet con planes domiciliarios, para lo cual se implementó nueva tecnología en relación a la que utilizaba la competencia, lo que permitió un ingreso rápido en este mercado.',
--         'Proporcionar el servicio de telecomunicaciones eficientes, confiables que permitan incrementar su productividad, con seguridad, simplicidad y valor, utilizando tecnología de última generación, gestionada por personal altamente calificado para brindar un servicio acorde a las necesidades de nuestros usuarios.',
--         'Ser una Empresa con un gran crecimiento de cobertura de servicio en el centro del país, posicionando nuestra empresa en las mejores a nivel nacional y proporcionando servicio de calidad para satisfacer la necesidades de nuestros clientes.',
--         'INTERNET POR FIBRA ÓPTICA',
--         'Servicio de internet desde $ 17.99 al mes',
--         '2023-01-01 00:00:00',
--         '2023-01-01 00:00:00'
--     );
--     (
--         1,
--         'Moronanet',
--         'Ecuador',
--         'Morona Santiago',
--         'Macas',
--         'Soasti y Cuenca',
--         '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3!2d-78.11825101337976!3d-2.30215443949185!2m3!1f52.67314464226125!2f80.41061151369871!3f0!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x91d20f3956994643%3A0xa7d12b2dd5950974!2sMORONA%20NET!5e0!3m2!1ses!2sec!4v1671211259291!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
--         '304 6355',
--         '098 807 8711',
--         'info@moronanet.com',
--         'Morona NET inicia sus actividades en el 2018 brindando servicio de Internet con planes domiciliarios, para lo cual se implementó nueva tecnología en relación a la que utilizaba la competencia, lo que permitió un ingreso rápido en este mercado.',
--         'Proporcionar el servicio de telecomunicaciones eficientes, confiables que permitan incrementar su productividad, con seguridad, simplicidad y valor, utilizando tecnología de última generación, gestionada por personal altamente calificado para brindar un servicio acorde a las necesidades de nuestros usuarios.',
--         'Ser una Empresa con un gran crecimiento de cobertura de servicio en el centro del país, posicionando nuestra empresa en las mejores a nivel nacional y proporcionando servicio de calidad para satisfacer la necesidades de nuestros clientes.',
--         'INTERNET POR FIBRA ÓPTICA',
--         'Servicio de internet desde $ 17.99 al mes',
--         '2023-01-01 00:00:00',
--         '2023-01-01 00:00:00'
--     );
DROP TABLE IF EXISTS user;

/* 
 user_level = Nivel academico => [1:Basico|2:Secudario|3:superior] 
 user_sex = Sexo => [M:Masculino|F:Femenino]
 user_type = Tipo de usuario => [1:Estudiante|2:Profesor|3:Administrador]
 */
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_names VARCHAR(50),
    user_surnames VARCHAR(50),
    user_user VARCHAR(50),
    user_cedula VARCHAR(10),
    user_email VARCHAR(50),
    user_email_verified BOOLEAN DEFAULT FALSE,
    user_pass TEXT,
    user_level INT,
    user_sex VARCHAR(1),
    user_phone VARCHAR(10),
    user_type INT DEFAULT 1,
    user_address TEXT,
    user_photo VARCHAR(50) DEFAULT 'default.png',
    user_status BOOLEAN DEFAULT TRUE,
    user_code VARCHAR(50),
    user_last VARCHAR(50),
    user_created VARCHAR(50),
    UNIQUE (user_user),
    UNIQUE (user_email),
    UNIQUE (user_cedula)
) ENGINE INNODB;

INSERT INTO
    users (
        user_names,
        user_surnames,
        user_user,
        user_email,
        user_pass,
        user_email_verified,
        user_type,
        user_last,
        user_created
    )
VALUES
    (
        'Administrador',
        'Learnidea',
        'admin',
        'learnidea@email.com',
        '21232f297a57a5a743894a0e4a801fc3',
        1,
        3,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        'Administrador',
        'Ideasoft',
        'ideasoft',
        'ideasoft@email.com',
        '27c355de4d2f5202868fc6c72991a3f2',
        1,
        3,
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS slider_imgs;

CREATE TABLE slider_imgs (
    slider_img_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    slider_img_url VARCHAR(150),
    slider_img_title VARCHAR(50),
    slider_img_desc TEXT,
    slider_img_last VARCHAR(50),
    slider_img_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    slider_imgs
VALUES
    (
        1,
        '1.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        '2.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        '3.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS redes_sociales;

CREATE TABLE redes_sociales (
    red_social_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    red_social_nombre VARCHAR(50),
    red_social_url VARCHAR(100),
    red_social_icon VARCHAR(50),
    red_social_color VARCHAR(50),
    red_social_last VARCHAR(50),
    red_social_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    redes_sociales
VALUES
    (
        1,
        'Whatsapp',
        'https://api.whatsapp.com/',
        '<i class="fab fa-whatsapp"></i>',
        '#25D366',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Facebook',
        'https://www.facebook.com/',
        'fab fa-facebook-f',
        '3b5998',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Instagram',
        'https://www.instagram.com/',
        'fab fa-instagram',
        '#833ab4',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS insts_avals_links;

CREATE TABLE insts_avals_links (
    inst_aval_link_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    inst_aval_link_name VARCHAR(50),
    inst_aval_link_ref TEXT,
    inst_aval_link_last VARCHAR(50),
    inst_aval_link_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    insts_avals_links
VALUES
    (
        1,
        'Instituto Tecnologico SUperior Sucua',
        'https://istsucua.edu.ec/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        1,
        'Secretaria de Educacion Superior, Ciencia, Tecnología e Innovación',
        'https://www.senescyt.gob.ec/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        1,
        'Centro de Tecnología de Entretenimiento y Capacitación',
        'https://www.cetececuador.com/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        1,
        'Learnidea',
        'https://learnidea.site/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        1,
        'Ideasoft',
        'https://ideasoft.site/',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );