<?php
namespace DB;
use mysqli;

/**
 * class Database
 */
class Database
{
    public object $conn;
    public function __construct(
        $Server,
        $DbUser,
        $DbPass,
        $DbName
    )
    {   $this->$Server = $Server;
        $this->$DbUser = $DbUser;
        $this->$DbPass = $DbPass;
        $this->$DbName = $DbName;        
        $this->conn = $this->getConn(
            $Server,
            $DbUser,
            $DbPass,
            $DbName
        );
    }

    /**
     * @return object
     */
    public function getConn(
        $Server,
        $DbUser,
        $DbPass,
        $DbName
    ): object
    {
        $conn = new mysqli($Server,$DbUser,$DbPass,$DbName);
        if (mysqli_connect_errno()){
            trigger_error("Problem with connecting to database.");
        }
        $conn->set_charset("utf8");
        return $conn;
    }

    /**
     * To get database results
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return array
     */
    public function select($query, $paramType="", $paramArray=array())
    {
        $stmt = $this->conn->prepare($query);
        
        if(!empty($paramType) && !empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        
        if (! empty($resultset)) {
            return $resultset;
        }
    }

    /**
     * To insert
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return int
     */
    public function insert($query, $paramType, $paramArray)
    {
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);
        $stmt->execute();
        return $stmt->insert_id;
    }

    /**
     * To update
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return int
     */
    public function update(string $query, string $paramType, array $paramArray)
    {
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);
        $stmt->execute();
        return $stmt;
    }

    /**
     * To delete
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return int
     */
    public function delete(string $query, string $paramType, array $paramArray)
    {
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);
        $stmt->execute();
        return $stmt->insert_id;
    }
    /**
     * To execute query
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     */
    public function execute($query, $paramType="", $paramArray=array())
    {
        $stmt = $this->conn->prepare($query);
        
        if(!empty($paramType) && !empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType="", $paramArray=array());
        }
        $stmt->execute();
    }
    
    /**
     * 1. Prepares parameter binding
     * 2. Bind prameters to the sql statement
     * @param string $stmt
     * @param string $paramType
     * @param array $paramArray
     */
    public function bindQueryParams($stmt, $paramType, $paramArray=array())
    {
        $paramValueReference[] = & $paramType;
        for ($i = 0; $i < count($paramArray); $i ++) {
            $paramValueReference[] = & $paramArray[$i];
        }
        call_user_func_array(array(
            $stmt,
            'bind_param'
        ), $paramValueReference);
    }
    
    /**
     * To get database results
     * @param string $query
     * @param string $paramType
     * @param array $paramArray
     * @return array
     */
    public function numRows($query, $paramType="", $paramArray=array())
    {
        $stmt = $this->conn->prepare($query);
        
        if(!empty($paramType) && !empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        
        $stmt->execute();
        $stmt->store_result();
        $recordCount = $stmt->num_rows;
        return $recordCount;
    }

}