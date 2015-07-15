<?php

/* Config Variable For Connect MySQL Database */
$host = "localhost";
$user = "root";
$pw = "1234";
$dbname = "allcondo";
/* End Config Variable For Connect MySQL Database */
//$host = "allcondophuket.db.10414744.hostedresource.com";
//$user = "allcondophuket";
//$pw = "Condo#1234";
//$dbname = "allcondophuket";

$clsDB = new Database($host, $dbname, $user, $pw);  // New Global Object Connection MySQL Database

/* Class Connect MySQL Database */

Class Database {

    private $strHost;
    private $strDB;
    private $strUser;
    private $strPassword;
    private $objConnect;

    function Database($strHost, $strDB, $strUser, $strPassword) {//Function consrtuctor for new object ConnectDb
        $this->strHost = $strHost;
        $this->strDB = $strDB;
        $this->strUser = $strUser;
        $this->strPassword = $strPassword;
        $this->Connect();
        $this->Close();
    }

    private function Connect() {
        $this->objConnect = mysql_connect(
                $this->strHost, $this->strUser, $this->strPassword);
        if (!$this->objConnect) {
            echo "Can not connect database";
            exit();
        }
        mysql_select_db($this->strDB);
        mysql_query("SET NAMES UTF8");
    }

    private function Close() {
        mysql_close($this->objConnect);
    }

    function ExcultQueryString($sql) {     //Function ExcultQueryString return string value
        $this->Connect();
        $objQuery = mysql_query($sql);
        $str = mysql_fetch_array($objQuery);
        $this->Close();
        return $str[0];
    }

    function ExcultQueryObject($sql) {    //Function ExcultQueryObject return object dataset
        $this->Connect();
        $objQuery = mysql_query($sql);
        $this->Close();
        return $objQuery;
    }

    function ExcultQueryJson($sql) {
        $this->Connect();
        $objQuery = mysql_query($sql);
        $intNumField = mysql_num_fields($objQuery);
        $resultArray = array();
        while ($obResult = mysql_fetch_array($objQuery)) {
            $arrCol = array();
            for ($i = 0; $i < $intNumField; $i++) {
                $arrCol[mysql_field_name($objQuery, $i)] = $obResult[$i];
            }
            array_push($resultArray, $arrCol);
        }
        $this->Close();
        return json_encode($resultArray);
    }

    function ExcultNonQuery($sql) {     //Function ExcultNonQuery return booleen for INSERT/UPDATE/DELETE
        $this->Connect();
        if (!mysql_query($sql))
            echo "SQL Error !!! \n" . mysql_errno() . ": " . mysql_error() . "\n";
        $this->Close();
    }

    function ExcultTransaction($ListSql) {  //Function ExcultTransaction for multi sql statement
        $this->Connect();
        mysql_query("START TRANSACTION");
        try {
            for ($i = 0; $i < count($ListSql); $i++) {
                if (!mysql_query($ListSql[$i])) {
                    echo "SQL Error !!! \n" . mysql_errno() . ": " . mysql_error() . "\n";
                    mysql_query("ROLLBACK");
                    $this->Close();
                    return false;
                }
            }
            mysql_query("COMMIT");
            $this->Close();
            return true;
        } catch (Exception $e) {
            mysql_query("ROLLBACK");
            echo "SQL Error !!! \n" . $e;
            return false;
        }
        $this->Close();
    }

}

/* End Class Connect MySQL Database */
?>