<?php

/**
 * This class is designed to handle articles from mysql
 */

class Article
{
    // Properties

    /**
     * @var int article ID
     */
    public $id = null;

    /**
     * @var int Article category
     */
    public $category = null;

    /**
     * @var int Date
     */
    public $onDate = null;

    /**
     * @var string Full title of the article
     */
    public $title = null;

    /**
     * @var string Subtitle
     */
    public $subtitle = null;

    /**
     * @var string HTML content of the article
     */
    public $content = null;

    /**
     * @var Image path
     */
    public $image = null;

    public $status_check=null;


    /**
     * Sets the object's properties using the values in the supplied array
     *
     * @param assoc The property values
     */

    public function __construct($data = array())
    {
        if (isset($data['id'])) $this->id = (int)$data['id'];
        if (isset($data['onDate'])) $this->onDate = (int)$data['onDate'];
        else $this->onDate = time();
        if (isset($data['title'])) $this->title = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title']);
            if (isset($data['subtitle'])) $this->subtitle = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['subtitle']);
                if (isset($data['content'])) $this->content = $data['content'];
                if (isset($data['image'])) $this->image = $data['image'];
                if (isset($data['status_check'])) $this->status_check = $data['status_check'];
                if (isset($data['category'])) $this->category = (int)$data['category'];
            }

    /**
     * Returns an Article object matching the given article ID
     *
     * @param int The article ID
     * @return Article|false The article object, or false if the record was not found or there was a problem
     */

    public static function getById($id)
    {
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT *, DATE_FORMAT(onDate, '%Y-%m-%d') AS onDate FROM articles WHERE id = :id";
        $st = $conn->prepare($sql);
        $st->bindValue(":id", $id, PDO::PARAM_INT);
        $st->execute();
        $row = $st->fetch(PDO::FETCH_ASSOC);
        $conn = null;
        if ($row) return $row;
    }


    /**
     * Returns all (or a range of) Article objects in the DB
     *
     * @param $category int
     * @param $column string
     * @param $order string
     * @return Article[]|false
     */

    public static function getList($category, $column = 'id', $order = 'DESC')
    {
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT *, UNIX_TIMESTAMP(CONCAT(onDate, ' 12:00:00')) AS onDate FROM articles WHERE category=:category ORDER BY $column $order";

        $st = $conn->prepare($sql);
        $st->bindValue(":category", $category, PDO::PARAM_INT);
        $st->execute();
        $list = array();

        while ($row = $st->fetch()) {
            $article = new Article($row);
            $list[] = $article;
        }

        $conn = null;
        return $list;
    }


    /**
     * Inserts the current Article object into the database, and sets its ID property.
     */

    public function insert()
    {
        $check_status="active";
        if(isset( $_SESSION["type"])){
            if( $_SESSION["type"]=="user"){
               $check_status="pending";

           }
           if( $_SESSION["type"]=="admin"){
               $check_status="active";

           }
       }


        // Does the Article object already have an ID?
       if ($this->id > 0) trigger_error("Article::insert(): Attempt to insert an Article object that already has its ID property set (to $this->id).", E_USER_ERROR);

        // Insert the Article
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "INSERT INTO articles ( category, onDate, title, subtitle, content, image, status_check ) VALUES ( :category, FROM_UNIXTIME(:onDate), :title, :subtitle, :content, :image, :status_check )";
        $st = $conn->prepare($sql);
        $st->bindValue(":category", $this->category, PDO::PARAM_INT);
        $st->bindValue(":onDate", $this->onDate, PDO::PARAM_INT);
        $st->bindValue(":title", $this->title, PDO::PARAM_STR);
        $st->bindValue(":subtitle", $this->subtitle, PDO::PARAM_STR);
        $st->bindValue(":content", $this->content, PDO::PARAM_STR);
        $st->bindValue(":image", $this->image, PDO::PARAM_STR);
        $st->bindValue(":status_check", $check_status, PDO::PARAM_STR);

        $st->execute();

        $this->id = $conn->lastInsertId();
        $conn = null;
    }


    /**
     * Updates the current Article object in the database.
     */
    
    public function approve()
    {
     if (is_null($this->id)) trigger_error("Article::update(): Attempting to update an Article object that does not have its ID property set.", E_USER_ERROR);
          $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sql = "UPDATE articles SET status_check=:status_check WHERE id = :id";
            $st = $conn->prepare($sql);
            $status_check="active";
            $st->bindValue(":status_check", $status_check);
             $st->bindValue(":id", $this->id, PDO::PARAM_INT);
            $st->execute();
            $conn = null;

    }
     public function unactive()
    {
     if (is_null($this->id)) trigger_error("Article::update(): Attempt to update an Article object that does not have its ID property set.", E_USER_ERROR);
          $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sql = "UPDATE articles SET status_check=:status_check WHERE id = :id";
            $st = $conn->prepare($sql);
            $status_check="pending";
            $st->bindValue(":status_check", $status_check);
             $st->bindValue(":id", $this->id, PDO::PARAM_INT);
            $st->execute();
            $conn = null;

    }
   
    public function update()
    {

        // Does the Article object have an ID?
        if (is_null($this->id)) trigger_error("Article::update(): Attempt to update an Article object that does not have its ID property set.", E_USER_ERROR);

        // Update the Article
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sql = "UPDATE articles SET onDate=FROM_UNIXTIME(:onDate), title=:title, subtitle=:subtitle, content=:content, image=:image WHERE id = :id";
            $st = $conn->prepare($sql);
            $st->bindValue(":onDate", $this->onDate, PDO::PARAM_INT);
            $st->bindValue(":title", $this->title, PDO::PARAM_STR);
            $st->bindValue(":subtitle", $this->subtitle, PDO::PARAM_STR);
            $st->bindValue(":content", $this->content, PDO::PARAM_STR);
            $st->bindValue(":image", $this->image, PDO::PARAM_STR);
            $st->bindValue(":id", $this->id, PDO::PARAM_INT);
            $st->execute();
            $conn = null;
        }


    /**
     * Deletes the current Article object from the database.
     */

    public function delete()
    {

        // Does the Article object have an ID?
        if (is_null($this->id)) trigger_error("Article::delete(): Attempting to delete an Article object that does not have its ID property set.", E_USER_ERROR);

        // Delete the Article
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $st = $conn->prepare("DELETE FROM articles WHERE id = :id LIMIT 1");
            $st->bindValue(":id", $this->id, PDO::PARAM_INT);
            $st->execute();
            $conn = null;
        }

    }

    ?>
