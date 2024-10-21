<?php
$uri = new Request();
$url = $uri->fullUrl();
$url_query = $uri->queryParam($url);
switch (@$url_query["section"]) {
    case "logout":
      session_unset();
      session_destroy();
      redirect(substr( $url, 0, strrpos( $url, "?")));
      break;
    case "login":
        $getParam = "login";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form
            $auth = $conn->authenticate($_POST['phone_no'], $_POST['password'], 'users');
            if($auth) {
               reset($auth);
               $auth = reset($auth);
               $_SESSION['uid'] = $auth["uid"];
               $_SESSION['role'] = $auth["role"];
               $_SESSION['first_name'] = $auth["first_name"];
               $_SESSION['last_name'] = $auth["last_name"];
               $_SESSION['initiated_name'] = $auth["initiated_name"] ? $auth["initiated_name"] : 0;
               $_SESSION['phone_no'] = $auth["phone_no"];
               $_SESSION['gender'] = $auth["gender"];
               $_SESSION['cid'] = $auth["cid"];
               $_SESSION['created_date'] = $auth["created_date"];
               redirect(substr( $url, 0, strrpos( $url, "?")));
            } else {
              $_SESSION['alert'] = failAlert("You have entered an invalid Mobile number or password!");
            }
          }        
      break;
    case "signup":
        $getParam = "signup";
      break;
    case "add_scriptures":
        admin_auth($url, $_SESSION['role']);
        $getParam = "add_scriptures";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $allow = array("jpg", "jpeg", "gif", "png");
            $target_dir = getcwd(). DIRECTORY_SEPARATOR . "uploads/";
            $data = array(
                'scripture_name' => $_POST['scripture_name'],
                'ref_url' => $_POST['ref_url']
            );
            $validate = $conn->validate($data);

            if (!!$_FILES['scr_image']['tmp_name']) // is the file uploaded yet?
            {
                $info = explode('.', strtolower( $_FILES['scr_image']['name']) ); // whats the extension of the file
                
                if ( in_array( end($info), $allow) ) // is this file allowed
                {
                    if (move_uploaded_file( $_FILES['scr_image']['tmp_name'], $target_dir . basename($_FILES['scr_image']['name']) ) )
                    {
                        $images['images'] = $_FILES['scr_image']['name'];
                        $validate = array_merge($validate, $images);
                    }
                }
                else
                {
                    $_SESSION['alert'] = failAlert("File is not an image. It is a " . pathinfo(basename($_FILES['scr_image']['name']), PATHINFO_EXTENSION) . " file type!");
                    redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_scriptures');
                }
            }
            $scriptures_add = $conn->insert('scriptures',$validate);
            if($scriptures_add){
                successAlert("Scripture added successfully!");
                redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_scriptures');
            }    
          }         
       break;
    case "add_chapter":
        admin_auth($url, $_SESSION['role']);
        $getParam = "add_chapters";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = array(
                'chapter_no' => $_POST['chapter_no'],
                'chapter_name' => $_POST['chapter_name'],
                'chapter_url' => $_POST['chapter_url'],
                'sid' => $_POST['sid']
            );
            $validate = $conn->validate($data);
            $chapter_add = $conn->insert('chapters',$validate);
            if($chapter_add){
                successAlert("Chapter added successfully!");
                redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_chapter');
            }    
          }         
       break;
    case "add_verse":
           admin_auth($url, $_SESSION['role']);
           $getParam = "add_verse";
           if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = array(
                'verse_no' => $_POST['verse_no'],
                'verse_url' => $_POST['verse_url'],
                'chapter_id' => $_POST['chapter_id']
            );
            $validate = $conn->validate($data);
            $verse_add = $conn->insert('verse',$validate);
            if($verse_add){
                successAlert("Verse added successfully!");
                redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_verse');
            }    
          }            
        break;        
    case "add_question":
            admin_auth($url, $_SESSION['role']);
            $getParam = "add_question";
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $data = array(
                    'sid' => $_POST['sid'],
                    'chapter_id' => $_POST['chapter_id'],
                    'vid' => $_POST['vid'],
                    'questions' => $_POST['questions'],
                    'right_option' => $_POST['right_option']
                );
                $validate = $conn->validate($data);
                $verse_add = $conn->insert('questions',$validate);
                $last_insert_id = $conn->lastinsertid('questions', 'qid');
                $option_data = array(
                    'option_1' => $_POST['option_1'],
                    'option_2' => $_POST['option_2'],
                    'option_3' => $_POST['option_3'],
                    'option_4' => $_POST['option_4'],
                    'qid' => $last_insert_id
                );                
                $option_validate = $conn->validate($option_data);
                $option_add = $conn->insert('options',$option_validate);
                if($option_add){
                    successAlert("Question and Option added successfully!");
                    redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_question');
                }    
              }             
        break;
    case "scriptures":
            $getParam = "scriptures";
        break; 
    case "chapters":
            $getParam = "chapters";
        break;
    case "questions":
            $getParam = "questions";
        break;
    case "quiz":
            $getParam = "quiz";
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $qid = $_POST['qid'];
                $question = $conn->select("questions", "*", "WHERE vid=$qid LIMIT 1");
                if($_POST) {
                    if($question[0]['right_option'] == $_POST['oid']) {
                        $marks = 1;
                    } 
                    else {
                        $marks = 0;
                    }
                    $ans_data = array(
                        'oid' => $_POST['oid'],
                        'qid' => $_POST['qid'],
                        'sid' => $_POST['sid'],
                        'chapter_id' => $_POST['chapter_id'],
                        'vid' => $_POST['vid'],
                        'uid' => $_POST['uid'],
                        'marks' => $marks
                    );
                    $ans_validate = $conn->validate($ans_data);
                    $user_ans_add = $conn->insert('user_answers', $ans_validate);
                    if($user_ans_add){                    
                        $_SESSION['alert'] = successAlert("Thank you for your prompt reponses to the question. Your understanding was outstanding!");
                        redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=my_result');
                    }
                } else {
                  $_SESSION['alert'] = failAlert("Please try again!");
                }
              }            
        break;
    case "my_result":
            $getParam = "my_result";
        break;    
    case "edit_chapters":
            $getParam = "edit_chapters";
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $allow = array("jpg", "jpeg", "gif", "png");
                $target_dir = getcwd(). DIRECTORY_SEPARATOR . "uploads/";
                $data = array(
                    'chapter_no' => $_POST['chapter_no'],
                    'chapter_name' => $_POST['chapter_name'],
                    'chapter_url' => $_POST['chapter_url'],
                    'sid' => $_POST['sid']
                );
                $validate = $conn->validate($data);
                if (!!$_FILES['chapter_image']['tmp_name']) // is the file uploaded yet?
                {
                    $info = explode('.', strtolower( $_FILES['chapter_image']['name']) ); // whats the extension of the file
                    
                    if ( in_array( end($info), $allow) ) // is this file allowed
                    {
                        // Rename the file
                        $temp = explode(".", $_FILES["chapter_image"]["name"]);
                        $newfilename = round(microtime(true)).'_ch_no_'.$_POST['chapter_no'].'_'.filter_filename($_POST['chapter_name']). '.' . end($temp);
                        if (move_uploaded_file($_FILES["chapter_image"]["tmp_name"], $target_dir . basename($newfilename)))
                        {
                            $images['chapter_image'] = $newfilename;
                            $validate = array_merge($validate, $images);
                        }
                    }
                    else
                    {
                        $_SESSION['alert'] = failAlert("File is not an image. It is a " . pathinfo(basename($_FILES['scr_image']['name']), PATHINFO_EXTENSION) . " file type!");
                        redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=edit_chapters&chapter_id='.$_POST['chapter_id']);
                    }
                }
                else
                {
                    $images['chapter_image'] = $_POST['edit_chapter_image'];
                    $validate = array_merge($validate, $images);                    
                }
                $chapters_edit = $conn->update('chapters', $validate, 'WHERE chapter_id='.$_POST['chapter_id']);
                if($chapters_edit){
                    successAlert("Chapter updated successfully!");
                    redirect(substr( $url, 0, strrpos( $url, "?")) . '?section=add_chapter');
                }    
              }            
        break;                                             
    default:
        $getParam = "carousel";
  }
?>