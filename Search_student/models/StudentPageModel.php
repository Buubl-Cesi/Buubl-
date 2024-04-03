<?php
class StudentPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberStudent() {
        $stmt = $this->pdo->query("SELECT count(ID_STUDENTS) AS NUMBER_STUDENT
        FROM students;");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return intval($result['NUMBER_STUDENT']);
    }

    public function getStudentWithLimit($limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT USERS_NAME,
        USERS_FNAME,
        STUDENT_PROMOTION,
        USERS_MAIL,
        USERS_IMG
        FROM users U
        JOIN students S ON U.ID_STUDENTS = S.ID_STUDENTS
        LIMIT :offset, :limit;");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getNumberStudentWithParameters($name, $fname, $promo) {
        $sql = "SELECT count(U.ID_STUDENTS) AS NUMBER_STUDENT
        FROM users U
        JOIN students S ON U.ID_STUDENTS = S.ID_STUDENTS
        WHERE 1=1";
    
        $params = array();
    
        if (!empty($name)) {
            $sql .= " AND U.USERS_NAME = :name";
            $params[':name'] = $name;
        }
    
        if (!empty($fname)) {
            $sql .= " AND U.USERS_FNAME = :fname";
            $params[':fname'] = $fname;
        }
    
        if (!empty($promo)) {
            $sql .= " AND S.STUDENT_PROMOTION = :promo";
            $params[':promo'] = $promo;
        }
    
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false ? intval($result['NUMBER_STUDENT']) : 0;
    }

    public function getWithLimitParameters($limit, $offset, $name, $fname, $promo) {
        $sql = "SELECT USERS_NAME,
        USERS_FNAME,
        STUDENT_PROMOTION,
        USERS_MAIL,
        USERS_IMG
        FROM users U
        JOIN students S ON U.ID_STUDENTS = S.ID_STUDENTS
        WHERE 1=1";

        $params = array();

        if (!empty($name)) {
            $sql .= " AND USERS_NAME = :name"; 
            $params[':name'] = $name;
        }

        if (!empty($fname)) {
            $sql .= " AND USERS_FNAME = :fname";
            $params[':fname'] = $fname;
        }

        if (!empty($promo)) {
            $sql .= " AND STUDENT_PROMOTION = :promo";
            $params[':promo'] = $promo;
        }

        $sql .= " LIMIT :offset, :limit";

        $params[':offset'] = $offset;
        $params[':limit'] = $limit;

        $stmt = $this->pdo->prepare($sql);

        foreach ($params as $key => &$val) {
            if (is_int($val)) {
                $stmt->bindParam($key, $val, PDO::PARAM_INT);
            } else {
                $stmt->bindParam($key, $val);
            }
        }

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
?>
