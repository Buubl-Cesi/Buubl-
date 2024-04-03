<?php
class PilotPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberPilotWithParameters($name, $fname, $promo) {
        $sql = "SELECT count(P.ID_PILOT) AS NUMBER_PILOT
        FROM USERS U
        JOIN PILOT P ON P.ID_PILOT = U.ID_PILOT
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
            $sql .= " AND P.PILOT_PROMOTION = :promo";
            $params[':promo'] = $promo;
        }
    
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false ? intval($result['NUMBER_PILOT']) : 0;
    }

    public function getWithLimitParameters($limit, $offset, $name, $fname, $promo) {
        $sql = "SELECT USERS_NAME,
        USERS_FNAME,
        PILOT_PROMOTION,
        USERS_MAIL,
        USERS_IMG
        FROM users U
        JOIN PILOT P ON P.ID_PILOT = U.ID_PILOT
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
            $sql .= " AND PILOT_PROMOTION = :promo";
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
