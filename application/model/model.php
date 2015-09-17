<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all Rows from the table
     * @param $columnsCsv
     * @param $tableName
     * @return mixed
     */
    public function getAllTest() {
        $sql = 'SELECT * FROM savvy_test';
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
        //return '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);
    }

    /**
     * Get all Rows from the table
     * @param $columnsCsv
     * @param $tableName
     * @return mixed
     */
    public function getAllProducts() {
        $sql = 'SELECT * FROM inventory';
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
        //return '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);
    }

//    /**
//     * Get a single row by table ID
//     * @param array $selectColumnsCsv
//     * @param $idColumnName
//     * @param $id
//     * @param $tableName
//     * @return mixed
//     */
//    protected function getRowById(array $selectColumnsCsv, $idColumnName, $id, $tableName) {
//        $sql = "SELECT :selectColumnsCsv FROM :tableName WHERE :idColumnName = :id LIMIT 1";
//        $query = $this->db->prepare($sql);
//        $parameters = array(
//                ':selectColumnsCsv' => $selectColumnsCsv,
//                ':tableName'        => $tableName,
//                ':idColumnName'     => $idColumnName,
//                ':id'               => $id);
//
//        // useful for debugging: you can see the SQL behind above construction by using:
//        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
//
//        $query->execute($parameters);
//
//        // fetch() is the PDO method that gets exactly one result
//        return $query->fetch();
//    }
//
//    /**
//     * Get rows by specifying a mapping of column name, value.
//     * IMPORTANT: specify $isAnd to decide whether to use AND or OR operator.
//     * @param $selectColumnsCsv
//     * @param $tableName
//     * @param $columnValueMap
//     * @param $isAnd
//     * @return mixed
//     */
//    public function getRowsFromColumnMap($selectColumnsCsv, $tableName, $columnValueMap, $isAnd) {
//
//        $sql = "SELECT :selectColumnsCsv FROM :tableName WHERE ";
//        $operator = $isAnd ? "AND" : "OR";
//        foreach ($columnValueMap as $columnName => $columnValue) {
//            $sql .= $columnName . " = " . $columnValue . " :operator ";
//        }
//
//        $parameters = array(
//            ':selectColumnsCsv' => $selectColumnsCsv,
//            ':tableName'        => $tableName,
//            ':operator'         => $operator);
//
//        $query = $this->db->prepare($sql);
//
//        $query->execute($parameters);
//        return $query->fetchAll();
//    }
//
//    /**
//     * Insert a single row by passing in a csv of values
//     * @param $tableName
//     * @param $columnsCsv
//     * @param $valuesCsv
//     */
//    protected function insertRow($tableName, $columnsCsv, $valuesCsv) {
//        $sql = "INSERT :tableName (:columnsCsv) VALUES (:valuesCsv)";
//
//        $query = $this->db->prepare($sql);
//        $parameters = array(
//            ':tableName'    => $tableName,
//            ':columnsCsv'   => $columnsCsv,
//            ':valuesCsv'    => $valuesCsv);
//
//        $query->execute($parameters);
//    }
//
//    /**
//     * Insert rows in bulk by passing an array of values.
//     * @param $tableName
//     * @param $columnsCsv
//     * @param $valuesArray
//     */
//    protected function insertRowsBulk($tableName, $columnsCsv, $valuesArray) {
//        $sql = "INSERT :tableName (:columnsCsv) VALUES ";
//
//        foreach ($valuesArray as $values) {
//            $sql .= "(" . $values . ")";
//        }
//
//        $query = $this->db->prepare($sql);
//        $parameters = array(
//            ':tableName'    => $tableName,
//            ':columnsCsv'   => $columnsCsv);
//
//        $query->execute($parameters);
//    }
//
//    protected function updateRowById($tableName, $columnValueMap, $idColumnName, $id) {
//        $sql = "UPDATE :tableName SET ";
//        foreach($columnValueMap as $columnName => $columnValue) {
//            $sql .= $columnName . " = " . $columnValue;
//        }
//
//        $sql .= " WHERE :idColumnName = :id";
//
//        $query = $this->db->prepare($sql);
//        $parameters = array(
//            ':tableName'    => $tableName,
//            ':idColumnName' => $idColumnName,
//            ':id'           => $id);
//
//        // useful for debugging: you can see the SQL behind above construction by using:
//        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
//
//        $query->execute($parameters);
//    }
//
//    protected function updateRowsFromColumnMap($tableName, $columnValueMap, $idColumnName, $id) {
//        $sql = "UPDATE :tableName SET ";
//        foreach($columnValueMap as $columnName => $columnValue) {
//            $sql .= $columnName . " = " . $columnValue;
//        }
//
//        $sql .= " WHERE :idColumnName = :id";
//
//        $query = $this->db->prepare($sql);
//        $parameters = array(
//            ':tableName'    => $tableName,
//            ':idColumnName' => $idColumnName,
//            ':id'           => $id);
//
//        // useful for debugging: you can see the SQL behind above construction by using:
//        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
//
//        $query->execute($parameters);
//    }
}
