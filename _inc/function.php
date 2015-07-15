<?php

include_once "database.php";
include_once "initial.php";


$fn = $_POST["fn"];
switch ($fn) {
    case "getimages" : echo getimages();
        break;
    case "getflaglanguage" : echo getflaglanguage();
        break;
    case "getcondo" : echo getcondo();
        break;
//    case "Getteacher" : echo Getteacher();
//        break;
//    case "GetteacherByteacher_id" : echo GetteacherByteacher_id($_POST["teacher_id"]);
//        break;
//    case "Insertteacher" : echo Insertteacher($_POST["json_teacher"]);
//        break;
//    case "Updateteacher" : echo Updateteacher($_POST["json_teacher"]);
//        break;
//    case "Removeteacher" : echo Removeteacher($_POST["teacher_id"]);
//        break;
//
//    case "GetstudentId" : echo GetstudentId();
//        break;
//    case "Getstudent" : echo Getstudent();
//        break;
//    case "GetstudentBystu_id" : echo GetstudentBystu_id($_POST["stu_id"]);
//        break;
//        break;
//    case "getstudentbyscoreproject_stu" : echo getstudentbyscoreproject_stu($_POST["stu_id"]);
//        break;
//
//    case "GetstudentNotAdviser" : echo GetstudentNotAdviser();
//        break;
//    case "getstudentbyscore" : echo getstudentbyscore($_POST["presentID"]);
//        break;
//    case "getstudentbyscoreproject" : echo getstudentbyscoreproject();
//        break;
//
//    case "Insertstudent" : echo Insertstudent($_POST["json_student"]);
//        break;
//    case "Updatestudent" : echo Updatestudent($_POST["json_student"]);
//        break;
//    case "Removestudent" : echo Removestudent($_POST["stu_id"]);
//        break;
//    case "updatescoresuccess" : echo updatescoresuccess($_POST["stu_id"]);
//        break;
//    //Export pdf 
//    case "export_checkstu_id" : echo export_checkstu_id($_POST["json_score"]);
//        break;
//   
//
//    case "Getpresent" : echo Getpresent();
//        break;
//    case "getcountpersent" : echo getcountpersent($_POST["stu_id"]);
//        break;
//    case "countpresentscorefromstudent" : echo countpresentscorefromstudent($_POST["stu_id"]);
//        break;
//
//    case "Insertmsg" : echo Insertmsg($_POST["json"]);
//        break;
//
//    case "Insertscore" : echo Insertscore($_POST["json"]);
//        break;
//
//    case "InsertStuScore" : echo InsertStuScore($_POST["json"]);
//        break;
//    case "InsertProjectScore" : echo InsertProjectScore($_POST["json"]);
//        break;
//
//    case "RemovetScore" : echo RemovetScore($_POST["score"]);
//        break;
//
//    case "InsertNews" : echo InsertNews($_POST["json"]);
//        break;
//
//    case "GetplanId" : echo GetplanId();
//        break;
//    case "Getplan" : echo Getplan();
//        break;
//    case "GetplanByplan_id" : echo GetplanByplan_id($_POST["plan_id"]);
//        break;
//    case "GetplanBystu" : echo GetplanBystu($_POST["stuid"]);
//        break;
//
//    case "Insertplan" : echo Insertplan($_POST["json_plan"]);
//        break;
//    case "Updateplan" : echo Updateplan($_POST["json_plan"]);
//        break;
//    case "Removeplan" : echo Removeplan($_POST["plan_id"]);
//        break;
//
//    case "checkLogin" : echo checkLogin($_POST["jsFormLogin"]);
//        break;
//
//    case "Getsendfile" : echo Getsendfile();
//        break;
//    case "Insertsendfile" : echo Insertsendfile($_POST["json_sendfile"]);
//        break;
//
//    case "Getsendproject" : echo Getsendproject();
//        break;
//    case "Insertsendproject" : echo Insertsendproject($_POST["json_sendfile"]);
//        break;
//
//    case "Getproject" : echo Getproject($_POST["json_sendfile"]);
//        break;
//    case "getproject_techer" : echo Getproject_techer();
//        break;
//    case "getwork_techer" : echo getwork_techer();
//        break;
//
//    case "CheckprojectStatusStudent" : echo CheckprojectStatusStudent($_POST["proj_id"]);
//        break;
//
//    case "CheckprojectStatusStudentRead" : echo CheckprojectStatusStudentRead($_POST["proj_id"]);
//        break;
//
//    case "CheckprojectFileStudent" : echo CheckprojectFileStudent($_POST["proj_id"]);
//        break;
//
//    case "DeleteCheckprojectStudent" : echo DeleteCheckprojectStudent($_POST["proj_id"]);
//        break;
//
//    case "DeleteCheckfileStudent" : echo DeleteCheckfileStudent($_POST["proj_id"]);
//        break;
//
//    case "updatestudentwithteacher" : echo updatestudentwithteacher($_POST["json_student"]);
//        break;
//    case "GetstudentByt_id" : echo GetstudentByt_id($_POST["t_id"]);
//        break;
//    case "Deladviser" : echo Deladviser($_POST["t_id"]);
//        break;
//
//    case "Getnews" : echo Getnews();
//        break;
//    case "Getnews_byID" : echo Getnews_byID($_POST["newsID"]);
//        break;
//    case "DeleteNews" : echo DeleteNews($_POST["newsID"]);
//        break;
//
//    case "Insertprojectstudent" : echo Insertprojectstudent($_POST["json"]);
//        break;
//    case "getprojectstudent" : echo getprojectstudent();
//        break;
//    case "getallproject" : echo getallproject();
//        break;
//    case "getprofiletecher" : echo getprofiletecher();
//        break;
//
//    case "updateprofileteacher" : echo updateprofileteacher($_POST["json"]);
//        break;
//    case "getprofilestudent" : echo getprofilestudent();
//        break;
//    case "updateprofilestudent" : echo updateprofilestudent($_POST["json"]);
//        break;
//    case "Getproject_name_with_stuid" : echo Getproject_name_with_stuid($_POST["stuid"]);
//        break;
//    case "getallscore" : echo getallscore();
//        break;
//    case "getallscore_byteacher" : echo getallscore_byteacher();
//        break;
//
//    case "getsc_stu" : echo getsc_stu($_POST["stu_id"]);
//        break;
//
//    case "countpresent" : echo countpresent();
//        break;
//
//
//    //new config 13-5-2558 / 22.32 
//    case "Getconfigscore" : echo Getconfigscore();
//        break;
//    case "UpdatePresentScore" : echo UpdatePresentScore($_POST["score"]);
//        break;
}

function getimages() {
    global $clsDB;
    $sql = "SELECT c_id,i_url FROM images";
    return $clsDB->ExcultQueryJson($sql);
}

function getflaglanguage() {
    global $clsDB;
    $sql = "SELECT l_id,l_initial,l_name,l_flag FROM languages";
    return $clsDB->ExcultQueryJson($sql);
}

function getcondo() {
    global $clsDB;
    $sql = "select c_id, m_id, l_id, c_name, c_projectname, c_projectby, c_status, "
            . "c_tid, c_typegroup, c_typestyle, c_room, c_roomsize, c_pid, c_nid, c_detail, c_detail_hashtag, "
            . "c_postdate, c_futureimg, c_latitude, c_longtitude, c_houseid, c_moo, c_province, c_districk, "
            . "c_subdistrick, c_floor, c_link, c_updatetime from condo";
    return $clsDB->ExcultQueryJson($sql);
}

//function GetteacherId() {
//    return GetMaxId("teacher", "teacher_id");
//}
//function Getteacher() {
//    global $clsDB;
//    $sql = "
//				SELECT
//					teacher.teacher_id,
//					teacher.teacher_name,
//					teacher.teacher_lname,
//					teacher.teacher_tel,
//					teacher.teacher_email,
//					teacher.teacher_type,
//					teacher.teacher_user,
//					teacher.teacher_password
//				FROM teacher
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetteacherByteacher_id($teacher_id) {
//    global $clsDB;
//    $sql = "
//				SELECT
//					teacher.teacher_id,
//					teacher.teacher_name,
//					teacher.teacher_lname,
//					teacher.teacher_tel,
//					teacher.teacher_email,
//					teacher.teacher_type,
//					teacher.teacher_user,
//					teacher.teacher_password
//				FROM teacher
//				WHERE teacher.teacher_id='$teacher_id'
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Insertteacher($json_teacher) {
//    $json_teacher = str_replace('\"', '"', $json_teacher);
//    $teacher = json_decode($json_teacher, true);
//
//    global $clsDB;
//    $sql = ScriptInsertteacher(
//            $teacher["teacher_name"], $teacher["teacher_lname"], $teacher["teacher_tel"], $teacher["teacher_email"], $teacher["teacher_type"], $teacher["teacher_user"], $teacher["teacher_password"]
//    );
//    /*
//      ScriptInsertteacher($teacher_id,$teacher_name,$teacher_lname,
//      $teacher_tel,$teacher_email,$teacher_type,$teacher_user,
//      $teacher_password)
//     */
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//    
//
//
//
//function Updateteacher($json_teacher) {
//    $json_teacher = str_replace('\"', '"', $json_teacher);
//    $teacher = json_decode($json_teacher, true);
//
//    global $clsDB;
//    $sql = ScriptUpdateteacher(
//            $teacher["teacher_id"], $teacher["teacher_name"], $teacher["teacher_lname"], $teacher["teacher_tel"], $teacher["teacher_email"], $teacher["teacher_type"], $teacher["teacher_user"], $teacher["teacher_password"]
//    );
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Removeteacher($teacher_id) {
//    global $clsDB;
//    $sql = "DELETE FROM teacher WHERE teacher_id='$teacher_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        //return "success";
//        $sql = "DELETE FROM adviser WHERE teacher_id='$teacher_id'";
//        $ListSql = array();
//        $i = 0;
//        $ListSql[$i++] = $sql;
//        if ($clsDB->ExcultTransaction($ListSql)) {
//            return "success";
//        }
//    }
//}
//
//function GetMaxId($table, $field_id) {
//    global $clsDB;
//    $sql = "SELECT IFNULL(MAX($field_id)+1,1) FROM $table";
//    return $clsDB->ExcultQueryString($sql);
//}
//
//function ScriptInsertteacher($teacher_name, $teacher_lname, $teacher_tel, $teacher_email, $teacher_type, $teacher_user, $teacher_password) {
//    $sql = "
//				INSERT INTO teacher(teacher_name,teacher_lname,
//					teacher_tel,teacher_email,teacher_user,teacher_password)	
//				VALUES('$teacher_name','$teacher_lname','$teacher_tel',
//					'$teacher_email','$teacher_user','$teacher_password')
//				";
//    return $sql;
//}
//
//function ScriptUpdateteacher($teacher_id, $teacher_name, $teacher_lname, $teacher_tel, $teacher_email, $teacher_type, $teacher_user, $teacher_password) {
//    $sql = "
//				UPDATE teacher SET teacher_name='$teacher_name',teacher_lname='$teacher_lname',		
//					teacher_tel='$teacher_tel',teacher_email='$teacher_email',
//					teacher_user='$teacher_user',teacher_password='$teacher_password',
//					teacher_type='$teacher_type'
//				WHERE teacher_id='$teacher_id'
//				";
//    return $sql;
//}
//
//function GetstudentId() {
//    return GetMaxId("student", "stu_id");
//}
//
//function Getstudent() {
//    $userid = getuserid();
//    global $clsDB;
//    $sql = "
//				SELECT
//					student.stu_id,
//					student.stu_card,
//					student.stu_name,
//					student.stu_lname,
//					student.stu_sex,
//					student.stu_tel,
//					student.stu_email,
//					student.stu_username,
//					student.stu_password
//				FROM student  WHERE stu_status = 0
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getstudentbyscore($present_score) {
//    $userid = getuserid();
//    global $clsDB;
//    $sql = "SELECT
//					student.stu_id,
//					student.stu_card,
//					student.stu_name,
//					student.stu_lname,
//					student.stu_sex,
//					student.stu_tel,
//					student.stu_email,
//					student.stu_username,
//					student.stu_password,
//                    s.score_id,
//                    s.present_id,
//                    s.content_score,
//                    s.pre_score,
//                    s.total_score
//				FROM student
//                LEFT JOIN scorepresent as s
//                ON student.stu_id=s.stu_id and s.teacher_id = $userid and s.present_id = $present_score where student.stu_status = 0";
//    //return $sql;
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getstudentbyscoreproject() {
//    $userid = getuserid();
//    global $clsDB;
//    $sql = "SELECT
//                    student.stu_id,
//                    student.stu_card,
//                    student.stu_name,
//                    student.stu_lname,
//                    student.stu_sex,
//                    student.stu_tel,
//                    student.stu_email,
//                    student.stu_username,
//                    student.stu_password,
//                    s.report_id,
//                    s.score,
//                    p.proj_name,
//                    p.proj_file
//                FROM student 
//                LEFT JOIN scorereport as s
//                    ON student.stu_id=s.stu_id  and s.teacher_id = $userid
//                LEFT JOIN project as p 
//                    ON p.stu_id = student.stu_id 
//                where student.stu_status = 0   ";
//    //return $sql;
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getpresent() {
//    global $clsDB;
//    $sql = "SELECT present_id,present_date,present_detail,content_score,percentscore,present_score,total_score FROM present ORDER BY present_id ";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetstudentNotAdviser() {
//    global $clsDB;
//    $sql = "SELECT stu_id,stu_name,stu_lname,stu_sex,stu_card FROM  student WHERE   stu_id NOT IN (SELECT DISTINCT(stu_id) FROM adviser) and stu_status = 0";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetstudentBystu_id($stu_id) {
//    global $clsDB;
//    $sql = "
//				SELECT
//					student.stu_id,
//					student.stu_card,
//					student.stu_name,
//					student.stu_lname,
//					student.stu_sex,
//					student.stu_tel,
//					student.stu_email,
//					student.stu_username,
//					student.stu_password
//				FROM student
//				WHERE student.stu_id='$stu_id'
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getstudentbyscoreproject_stu($stu_id) {
//    global $clsDB;
//    $sql = "select sum(score)/count(DISTINCT teacher_id) as final_score
//from scorereport 
//where stu_id = $stu_id
//group by stu_id";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetstudentByt_id($t_id) {
//    global $clsDB;
//    $sql = "select a.stu_id, a.teacher_id, s.stu_name, s.stu_lname, s.stu_sex,s.stu_card,s.stu_sex,s.stu_tel,s.stu_email
//from student as s, adviser as a 
//where s.stu_id = a.stu_id and s.stu_status = 0 and a.teacher_id = $t_id";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getnews_byID($id) {
//    global $clsDB;
//    $sql = "select id, news_head, news_detail, DATE_FORMAT(news_datepost,'%d/%m/%Y')as news_datepost
//            from news where id =  $id  order by news_datepost desc";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function DeleteNews($id) {
//    global $clsDB;
//    $sql = "delete from news where id = $id";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Deladviser($t_id) {
//    global $clsDB;
//    $sql = "DELETE from adviser where teacher_id = $t_id";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function InsertNews($json) {
//    $json_ = str_replace('\"', '"', $json);
//    $msg = json_decode($json_, true);
//    $news_head = $msg["news_head"];
//    $news_detail = $msg["news_detail"];
//
//    $sql = "INSERT INTO news (news_head,news_detail) VALUES ('$news_head','$news_detail')";
//
//
//    global $clsDB;
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Insertscore($json) {
//    $json_ = str_replace('\"', '"', $json);
//    $msg = json_decode($json_, true);
//    $present_date = $msg["present_date"];
//    $present_detail = $msg["present_detail"];
//    $present_score = $msg["present_score"];
//    $content_score = $msg["content_score"];
//    $percentscore = $msg["percentscore"];
//    $t = $present_score + $content_score;
//
//    $sql = "INSERT INTO  present (present_date,present_detail,content_score,present_score,total_score,percentscore)
//            VALUES ('$present_date','$present_detail',$present_score,$content_score,$t,$percentscore)";
//
//    global $clsDB;
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function InsertStuScore($json) {
//    $userid = getuserid();
//    $json_ = str_replace('\"', '"', $json);
//    $msg = json_decode($json_, true);
//    $stu_id = $msg["stu_id"];
//    $score_id = $msg["present_id"];
//    $score_id_tb = $msg["score_id"];
//    $present_score = $msg["pre_score"];
//    $content_score = $msg["content_score"];
//    $t = $present_score + $content_score;
//    $type_action = $msg["type_action"];
//    if ($type_action == "add") {
//        $sql = "INSERT INTO  scorepresent (present_id,content_score,pre_score,total_score,teacher_id,stu_id)
//            VALUES ($score_id,$content_score,$present_score,$t,$userid,$stu_id)";
//    } else {
//        $sql = "UPDATE scorepresent SET content_score = $content_score,pre_score = $present_score, total_score = $t WHERE score_id =  $score_id_tb";
//    }
//    global $clsDB;
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function InsertProjectScore($json) {
//    $userid = getuserid();
//    $json_ = str_replace('\"', '"', $json);
//    $msg = json_decode($json_, true);
//    $stu_id = $msg["stu_id"];
//    $type_action = $msg["aad"];
//    $_score = $msg["_score"];
//    if ($type_action == "add") {
//        $sql = "INSERT INTO  scorereport (score,stu_id,teacher_id)
//            VALUES ($_score,$stu_id,$userid)";
//    } else {
//        $sql = "UPDATE scorereport SET score = $_score WHERE stu_id =  $stu_id and teacher_id = $userid";
//    }
//    global $clsDB;
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Insertmsg($json) {
//    $json_ = str_replace('\"', '"', $json);
//    $msg = json_decode($json_, true);
//    $comment = $msg["comment"];
//    $status = $msg["status"];
//    $c = $msg["pj_wo_id_check"];
//    $id = $msg["pj_wo_id"];
//    $proj_comment_date = date("Y-m-d H:i:s");
//    if ($c == 'project') {
//        $sql = "UPDATE project SET proj_status = $status , proj_comment ='$comment' , proj_comment_date = '$proj_comment_date' where proj_id = $id";
//    } else {
//        $sql = "UPDATE sendfile  SET status = $status , comment ='$comment' where send_id = $id";
//    }
//
//    global $clsDB;
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Insertstudent($json_student) {
//    $json_student = str_replace('\"', '"', $json_student);
//    $student = json_decode($json_student, true);
//
//    global $clsDB;
//    $sql = ScriptInsertstudent(
//            GetstudentId(), $student["stu_card"], $student["stu_name"], $student["stu_lname"], $student["stu_sex"], $student["stu_tel"], $student["stu_email"], $student["stu_username"], $student["stu_password"]
//    );
//    /*
//      ScriptInsertteacher($teacher_id,$teacher_name,$teacher_lname,
//      $teacher_tel,$teacher_email,$teacher_type,$teacher_user,
//      $teacher_password)
//     */
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function CheckprojectStatusStudent($pj_id) {
//
//    global $clsDB;
//    $sql = "UPDATE project SET proj_status = 1 WHERE proj_id = $pj_id";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function CheckprojectStatusStudentRead($pj_id) {
//
//    global $clsDB;
//    $sql = "UPDATE project SET proj_status = 3 WHERE proj_id = $pj_id";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function CheckprojectFileStudent($pj_id) {
//
//    global $clsDB;
//    $sql = "UPDATE sendfile SET status = 1 WHERE send_id = $pj_id";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function DeleteCheckprojectStudent($pj_id) {
//
//    global $clsDB;
//    $sql = "DELETE FROM project WHERE proj_id='$pj_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function DeleteCheckfileStudent($pj_id) {
//
//    global $clsDB;
//    $sql = "DELETE FROM sendfile WHERE send_id='$pj_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function updatestudentwithteacher($json_student) {
//    $json_student = str_replace('\"', '"', $json_student);
//    $student = json_decode($json_student, true);
//    $teacher_id = $student["teacher_id"];
//    $stu_id = $student["stu_id"];
//    global $clsDB;
//
//    $sql = "Insert into adviser (teacher_id,stu_id) values ($teacher_id,$stu_id) ";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Updatestudent($json_student) {
//    $json_student = str_replace('\"', '"', $json_student);
//    $student = json_decode($json_student, true);
//
//    global $clsDB;
//    $sql = ScriptUpdatestudent(
//            $student["stu_id"], $student["stu_card"], $student["stu_name"], $student["stu_lname"], $student["stu_sex"], $student["stu_tel"], $student["stu_email"], $student["stu_username"], $student["stu_password"]
//    );
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Removestudent($stu_id) {
//    global $clsDB;
//    $sql = "UPDATE student SET stu_status = 1 where stu_id = $stu_id";
//    //$sql = "DELETE FROM student WHERE stu_id='$stu_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function updatescoresuccess($stu_id) {
//    global $clsDB;
//    $sql = "UPDATE scorepresent SET status = 1 where stu_id = $stu_id";
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    } else {
//        return $sql;
//    }
//}
//function export_checkstu_id($json_score) {
//    $json_score1 = str_replace('\"', '"', $json_score);
//    $_json = json_decode($json_score1, true);
//    $stu_id = $_json["stu_id"];
//    $present_score = $_json["present_score"];
//    $project_score = $_json["project_score"];
//    $total_score = $_json["total_score"];
//    
//    global $clsDB;
//    $sql = "select count(stu_id) count from finalscore where stu_id = $stu_id ;";
//    $count = $clsDB->ExcultQueryString($sql);
//    if((int)$count > 0){
//        $sql_delete = "delete from finalscore where stu_id = $stu_id ;";
//        $clsDB->ExcultQueryString($sql_delete);
//    }
//    $sql_insert = "INSERT INTO finalscore (stu_id, present_score, project_score, total_score) VALUES ($stu_id,$present_score,$project_score,$total_score) ;";
//    if($clsDB->ExcultQueryJson($sql_insert)){
//         return  'ok' ;
//    }
//     
//    
//    //return $clsDB->ExcultQueryJson($sql);
//    
//}
//
//
//function RemovetScore($score_id) {
//    global $clsDB;
//    $sql = "DELETE FROM present WHERE present_id = $score_id";
//    //$sql = "DELETE FROM student WHERE stu_id='$stu_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
///*
//  function GetMaxId($table,$field_id)
//  {
//  global $clsDB;
//  $sql = "SELECT IFNULL(MAX($field_id)+1,1) FROM $table";
//  return $clsDB->ExcultQueryString($sql);
//  } */
//
//function ScriptInsertstudent($stu_id, $stu_card, $stu_name, $stu_lname, $stu_sex, $stu_tel, $stu_email, $stu_username, $stu_password) {
//    $sql = "
//				INSERT INTO student(stu_id,stu_card,stu_name,
//					stu_lname,stu_sex,stu_tel,stu_email,stu_username,stu_password,priority)	
//				VALUES('$stu_id','$stu_card','$stu_name','$stu_lname',
//					'$stu_sex','$stu_tel','$stu_email','$stu_username','$stu_password',1)
//				";
//    return $sql;
//}
//
//function ScriptUpdatestudent($stu_id, $stu_card, $stu_name, $stu_lname, $stu_sex, $stu_tel, $stu_email, $stu_username, $stu_password) {
//    $sql = "
//				UPDATE student SET stu_card='$stu_card',stu_name='$stu_name',		
//					stu_lname='$stu_lname',stu_sex='$stu_sex',stu_tel='$stu_tel',
//					stu_email='$stu_email',stu_username='$stu_username',
//					stu_password='$stu_password'
//				WHERE stu_id='$stu_id'
//				";
//    return $sql;
//}
//
//function GetplanId() {
//    return GetMaxId("plan", "plan_id");
//}
//
//function Getplan() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "
//				SELECT
//					plan.plan_id,
//					plan.time_start,
//					plan.time_end,
//					plan.detailplan_detail
//				FROM plan WHERE advi_id = $userid
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getsendfile() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "select send_id, send_detail, sent_date, send_file, advi_id, stu_id,status,comment   
//                        from sendfile 
//                        where stu_id = $userid";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getsendproject() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "select proj_id, proj_name, proj_detail, proj_file,proj_status, stu_id, proj_sentdate, proj_comment ,proj_comment_date 
//                        from project 
//                        where  stu_id = $userid";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getproject_techer() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "select p.proj_id, p.proj_name, p.proj_detail, p.proj_file,  p.stu_id, p.proj_sentdate, p.proj_status,s.stu_name,s.stu_lname,s.stu_card,s.stu_tel 
//from project as p, adviser as a ,student as s
//where p.stu_id = a.stu_id and p.stu_id = s.stu_id and a.teacher_id = $userid order by  p.proj_sentdate desc";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getwork_techer() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "select p.send_id, p.send_detail, p.sent_date, p.send_file, p.status,s.stu_name,s.stu_lname,s.stu_card,s.stu_tel 
//from sendfile  as p, adviser as a ,student as s
//where p.stu_id = a.stu_id and p.stu_id = s.stu_id and a.teacher_id = $userid order by  p.sent_date desc";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getnews() {
//    global $clsDB;
//    $sql = "select id, news_head, news_detail, DATE_FORMAT(news_datepost,'%d/%m/%Y')as news_datepost
//            from news order by news_datepost desc ";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function countpresent() {
//    global $clsDB;
//    $sql = "select count(present_id) as countpresent
//from present  ";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function countpresentscorefromstudent($stu_id) {
//    global $clsDB;
//    $sql = "SELECT COUNT(DISTINCT ( present_id )) as cp
//FROM scorepresent
//WHERE stu_id = $stu_id ";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getconfigscore() {
//    global $clsDB;
//    $sql = "select scorepercent
//from configscore limit 1 ";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getallproject() {
//    global $clsDB;
//    $sql = "select p.proj_id, p.proj_name,p.project_name_eng, p.project_detail, p.stu_id,s.stu_card, s.stu_name, s.stu_lname
//from project as p,student as s 
//where p.stu_id = s.stu_id ";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getprofiletecher() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "select teacher_id, teacher_name, teacher_lname, teacher_tel,
// teacher_email, teacher_type, teacher_user, teacher_password
// from teacher where teacher_id = $userid";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getprofilestudent() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = " select stu_id, stu_card, stu_name, stu_lname, stu_sex, stu_tel, stu_email, 
//stu_username, stu_password, priority, stu_status
//from student where stu_status = 0 and stu_id = $userid";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getallscore() {
//    global $clsDB;
//    $sql = "    select round(sum(sc.total_score)/count(DISTINCT sc.teacher_id)*p.percentscore/100,2) as total_score  
//,s.stu_card, s.stu_name,sc.status , s.stu_lname,sc.present_id,p.present_detail,sc.stu_id
//from scorepresent as sc, present as p ,student as s
//where sc.present_id = p.present_id and s.stu_id = sc.stu_id 
//group by sc.stu_id,sc.present_id";
////    $sql = "select round(sum(sc.content_score)/count(DISTINCT sc.teacher_id),2) as content_score, 
////round(sum(sc.pre_score)/count(DISTINCT sc.teacher_id),2) as pre_score, 
////round(sum(sc.total_score)/count(DISTINCT sc.teacher_id),2) as total_score, sc.stu_id,count(DISTINCT sc.teacher_id) ,
////s.stu_card, s.stu_name, s.stu_lname
////from scorepresent as sc,student as s 
////where s.stu_id = sc.stu_id
////group by sc.stu_id";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getallscore_byteacher() {
//    global $clsDB;
//    $sql = "    select round(sum(sc.total_score)/count(DISTINCT sc.teacher_id)*p.percentscore/100,2) as total_score  
//,s.stu_card, s.stu_name,sc.status , s.stu_lname,sc.present_id,p.present_detail,sc.stu_id
//from scorepresent as sc, present as p ,student as s
//where sc.present_id = p.present_id and s.stu_id = sc.stu_id and sc.status = 1 
//group by sc.stu_id,sc.present_id";
////    $sql = "select round(sum(sc.content_score)/count(DISTINCT sc.teacher_id),2) as content_score, 
////round(sum(sc.pre_score)/count(DISTINCT sc.teacher_id),2) as pre_score, 
////round(sum(sc.total_score)/count(DISTINCT sc.teacher_id),2) as total_score, sc.stu_id,count(DISTINCT sc.teacher_id) ,
////s.stu_card, s.stu_name, s.stu_lname
////from scorepresent as sc,student as s 
////where s.stu_id = sc.stu_id
////group by sc.stu_id";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Getproject_name_with_stuid($stuid) {
//    global $clsDB;
//    $sql = "SELECT project_name FROM projectstudent where stu_id = $stuid";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getprojectstudent() {
//    global $clsDB;
//    $userid = getuserid();
//    $sql = "SELECT proj_id,proj_name,project_detail,project_name_eng from project where stu_id = $userid";
//
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getcountpersent($stu_id) {
//    global $clsDB;
//    $sql = "select count(present_id) as count, stu_id 
//from scorepresent where stu_id = $stu_id
//group by stu_id ";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function getsc_stu($stu_id) {
//    global $clsDB;
//    $sql = "select s.score_id, s.present_id, s.content_score, s.pre_score, s.total_score, s.teacher_id, s.stu_id,
//p.present_detail, concat(t.teacher_name,' ',t.teacher_lname) as techer_name, st.stu_card,p.percentscore, concat(st.stu_name, ' ', st.stu_lname) as stududentname
//from scorepresent as s, teacher as t , present as p ,student as st
//where s.teacher_id = t.teacher_id and s.present_id = p.present_id and st.stu_id = s.stu_id and  s.stu_id = $stu_id 
//    order by s.present_id
//";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetplanByplan_id($plan_id) {
//    global $clsDB;
//    $sql = "
//				SELECT
//					plan.plan_id,
//					plan.time_start,
//					plan.time_end,
//					plan.detailplan_detail
//				FROM plan
//				WHERE plan.plan_id='$plan_id'
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function GetplanBystu($stu_id) {
//    global $clsDB;
//    $sql = "
//				SELECT
//					plan.plan_id,
//					plan.time_start,
//					plan.time_end,
//					plan.detailplan_detail
//				FROM plan
//				WHERE plan.advi_id='$stu_id'
//				";
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Insertplan($json_plan) {
//    $json_plan = str_replace('\"', '"', $json_plan);
//    $plan = json_decode($json_plan, true);
//
//    global $clsDB;
//    $sql = ScriptInsertplan(
//            GetplanId(), $plan["time_start"], $plan["time_end"], $plan["detailplan_detail"]
//    );
//    /*
//      ScriptInsertteacher($teacher_id,$teacher_name,$teacher_lname,
//      $teacher_tel,$teacher_email,$teacher_type,$teacher_user,
//      $teacher_password)
//     */
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Getproject($json_sendfile) {
//    $_json_sendfile = str_replace('\"', '"', $json_sendfile);
//    $sf = json_decode($_json_sendfile, true);
//    $txt_search = $sf["txt_search"];
//
//    $sql = "select p.proj_id, p.proj_name, p.proj_detail, p.proj_file, p.stu_id, p.proj_sentdate,CONCAT(s.stu_name,' ' ,s.stu_lname) as fullname
//                    from project as p,student as s
//                    where p.proj_status = 1 and p.stu_id = s.stu_id and (p.proj_name like '%" . $txt_search . "%' or p.proj_detail like '%" . $txt_search . "%')";
//
//    global $clsDB;
//    return $clsDB->ExcultQueryJson($sql);
//}
//
//function Insertsendproject($json_sendfile) {
//    $_json_sendfile = str_replace('\"', '"', $json_sendfile);
//    $sf = json_decode($_json_sendfile, true);
//    $send_file = $sf["send_file"];
//    //$send_detail = $sf["send_detail"];
//    $proj_id = $sf["proj_id"];
//    //$userid = getuserid();
//    global $clsDB;
//    $sql = "update project set proj_file =  '$send_file',proj_status = 0 where proj_id	=   $proj_id ";
//    //$sql = "Insert into project (proj_name, proj_detail, proj_file , stu_id) values ('$proj_name','$send_detail','$send_file','$userid')";
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Insertprojectstudent($json) {
//    $_json_sendfile = str_replace('\"', '"', $json);
//    $sf = json_decode($_json_sendfile, true);
//    $project_name = $sf["project_name"];
//    $project_name_eng = $sf["project_name_eng"];
//    $project_detail = $sf["project_detail"];
//    $t_save = $sf["t_save"];
//    $userid = getuserid();
//    global $clsDB;
//    if ($t_save != "") {
//        $sql = "Update project set proj_name = '$project_name',project_name_eng = '$project_name_eng',project_detail = '$project_detail' where stu_id = $userid";
//    } else {
//        $sql = "Insert into project (proj_name,project_name_eng,project_detail,stu_id) VALUES ('$project_name','$project_name_eng','$project_detail',$userid)";
//    }
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function updateprofileteacher($json) {
//    $_json_sendfile = str_replace('\"', '"', $json);
//    $sf = json_decode($_json_sendfile, true);
//    $teacher_email = $sf["teacher_email"];
//    $teacher_lname = $sf["teacher_lname"];
//    $teacher_name = $sf["teacher_name"];
//    $teacher_password = $sf["teacher_password"];
//    $teacher_tel = $sf["teacher_tel"];
//    $teacher_user = $sf["teacher_user"];
//    $img = $sf["img"];
//    $userid = getuserid();
//    global $clsDB;
//
//    $sql = "Update teacher set teacher_name = '$teacher_name', teacher_lname = '$teacher_lname', teacher_tel = '$teacher_tel',teacher_email = '$teacher_email',teacher_user = '$teacher_user', teacher_password = '$teacher_password',img = '$img' where teacher_id = $userid";
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    } else {
//        return "dddd";
//    }
//}
//
//function updateprofilestudent($json) {
//    $_json_sendfile = str_replace('\"', '"', $json);
//    $sf = json_decode($_json_sendfile, true);
//    $stu_name = $sf["stu_name"];
//    $stu_lname = $sf["stu_lname"];
//    $sex = $sf["sex"];
//    $stu_tel = $sf["stu_tel"];
//    $stu_email = $sf["stu_email"];
//    $stu_username = $sf["stu_username"];
//    $stu_password = $sf["stu_password"];
//    $img = $sf["img"];
//    $userid = getuserid();
//    global $clsDB;
//
//    $sql = "UPDATE student SET stu_name = '$stu_name',stu_lname = '$stu_lname',stu_sex = $sex,stu_tel = '$stu_tel',stu_email='$stu_email',stu_username ='$stu_username',stu_password ='$stu_password',img = '$img' where  stu_id = $userid";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    } else {
//        return "dddd";
//    }
//}
//
//function UpdatePresentScore($json) {
//    $_json_sendfile = str_replace('\"', '"', $json);
//    $sf = json_decode($_json_sendfile, true);
//    global $clsDB;
//    $sql = "UPDATE configscore SET scorepercent = $sf";
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    } else {
//        return "dddd";
//    }
//}
//
//function Insertsendfile($json_sendfile) {
//    $_json_sendfile = str_replace('\"', '"', $json_sendfile);
//    $sf = json_decode($_json_sendfile, true);
//    $send_file = $sf["send_file"];
//    $send_detail = $sf["send_detail"];
//    $userid = getuserid();
//    global $clsDB;
//
//    $sql = "Insert into sendfile (send_detail, send_file, stu_id) values ('$send_detail','$send_file','$userid')";
//
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Updateplan($json_plan) {
//    $json_plan = str_replace('\"', '"', $json_plan);
//    $plan = json_decode($json_plan, true);
//
//    global $clsDB;
//    $sql = ScriptUpdateplan(
//            $plan["plan_id"], $plan["time_start"], $plan["time_end"], $plan["detailplan_detail"]
//    );
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
//function Removeplan($plan_id) {
//    global $clsDB;
//    $sql = "DELETE FROM plan WHERE plan_id='$plan_id'";
//    $ListSql = array();
//    $i = 0;
//    $ListSql[$i++] = $sql;
//    if ($clsDB->ExcultTransaction($ListSql)) {
//        return "success";
//    }
//}
//
///*
//  function GetMaxId($table,$field_id)
//  {
//  global $clsDB;
//  $sql = "SELECT IFNULL(MAX($field_id)+1,1) FROM $table";
//  return $clsDB->ExcultQueryString($sql);
//  } */
//
//function ScriptInsertplan($plan_id, $time_start, $time_end, $detailplan_detail) {
//    $userid = getuserid();
//    $sql = "
//				INSERT INTO plan(plan_id,time_start,time_end,detailplan_detail,advi_id)	
//				VALUES('$plan_id','$time_start','$time_end','$detailplan_detail','$userid')
//				";
//    return $sql;
//}
//
//function ScriptUpdateplan($plan_id, $time_start, $time_end, $detailplan_detail) {
//    $sql = "
//				UPDATE plan SET time_start='$time_start',time_end='$time_end',		
//					detailplan_detail='$detailplan_detail'
//				WHERE plan_id='$plan_id'
//				";
//    return $sql;
//}
//
//function checkLogin($json_) {
//    $json_ = str_replace('\"', '"', $json_);
//    $login = json_decode($json_, true);
//    $username = $login['username'];
//    $password = $login['password'];
//    $techertext = 't_';
//
//    $sql = '';
//    if ($username == 'admin') {
//        $sql = "SELECT 'admin' as id,password,fullname,'3' as priority"
//                . " from admin where password = '$password' ";
//    } else if (strstr($username, $techertext)) {
//        $sql = "SELECT teacher_id as id,CONCAT(teacher_name,' ',teacher_lname) AS fullname,priority,img"
//                . " from teacher where teacher_user = '$username' "
//                . " and teacher_password = '$password' ";
//    } else {
//        $sql = "SELECT stu_id as id,CONCAT(stu_name,' ',stu_lname) AS fullname,priority,img"
//                . " from student where stu_username = '$username' "
//                . " and stu_password = '$password' and stu_status=0 ";
//    }
//
//    global $clsDB;
//    return $clsDB->ExcultQueryJson($sql);
//}
?>
