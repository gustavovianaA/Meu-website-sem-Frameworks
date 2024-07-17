<?php
class Article
{

    private $id;
    public $title;
    public $lang;
    public $filepath;
    public $exists = false;

    public function find($title, $lang)
    {

        $sql = new Database();

        $results = $sql->select("SELECT * FROM articles WHERE title = :TITLE AND lang = :LANG", array(
            ":TITLE" => $title,
            ":LANG" => $lang
        ));

        if (count($results) > 0) {

            if (SELF::checkExists($results[0]['filepath'])) {
                $this->title = $results[0]['title'];
                $this->lang = $results[0]['lang'];
                $this->filepath = $results[0]['filepath'];
                $this->exists = true;
            }
        }

        return null;
    }

    public function all()
    {

        $sql = new Database();

        return $sql->select("SELECT * FROM articles");
    }

    public static function checkExists($filepath)
    {
        return file_exists("../articles/{$filepath}");
    }



    /*
    public function setData($data)
    {

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }
    */

    /*
    public function insert()
    {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN' => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function update($login, $password)
    {

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN' => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha(),
            ':ID' => $this->getIdusuario()
        ));
    }

    public function delete()
    {

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID' => $this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    */
}
