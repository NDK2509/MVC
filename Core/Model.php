<?php Class Model {
    protected $con;
    public function __construct()
    {
        $this->con = new mysqli($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DB_NAME"]);
        $this->con->query("SET NAMES 'uf8'");
    }
}
