<?php
session_start()?>
<!doctype html>
<html>
	<head><title>Upload Ques</title>
		<e1>Upload Question</e1>
	</head>
	<body>
		<?php if($_SESSION["type"]!="teacher")header('Location:Index.php'); ?>
		<form name="upload" method="post" action="">

                <table border="0" cellpadding="5" >
                   <tr>
                     <td>Subject:</td>
                     <td><input type="text" name="Sub" required/></td>
                   </tr>
                   <tr>
                   	<td colspan="2" align="right"><input type="submit" value="Submit"/></td>
                   </tr>
                </table>

          </form>
          <form name="uploadq" method="post" action="">

                <table border="0" cellpadding="5" >
                   <tr>
                     <td>Ques:</td>
                     <td><input type="text" name="ques" required/></td>
                   </tr>
                   <tr>
                     <td>Option1:</td>
                     <td><input type="text" name="op1" required/></td>
                   </tr>
                   <tr>
                     <td>Option2:</td>
                     <td><input type="text" name="op2" required/></td>
                   </tr>
                   <tr>
                     <td>Option3:</td>
                     <td><input type="text" name="op3" required/></td>
                   </tr>
                   <tr>
                     <td>Ans:</td>
                     <td><input type="text" name="ans" required/></td>
                   </tr>
                   <tr>
                   	<td colspan="2" align="right"><input type="submit" value="Submit"/></td>
                   </tr>
                </table>

          </form>
          <?php
          	function test_input($data) 
			{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
				$q="";
				 if (isset($_POST['Sub'])) {
				 	//echo "sucs";
				 	//echo $_POST['Sub'];
				 
				$q=test_input($_POST['Sub']);
				} 
				$xml= new DOMDocument("1.0","UTF-8");
				$xml->load('Quizlist.xml');
				$rootTag=$xml->getElementsByTagName("QuizList")->item(0);
				$QuizTag=$xml->createElement("Quiz");
				if(!isset($_COOKIE["flag"])){
				
				
				$subjectTag=$xml->createElement("Subject",$q);
				$QuizTag->appendChild($subjectTag);
				}
				setcookie("flag","1",time() + (86400 * 30), "/");


				$ques="";
				$opt1="";
				$opt2="";
				$opt3="";
				$optans="";
				if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$ques=test_input($_POST['ques']);
					$opt1=test_input($_POST['op1']);
					$opt2=test_input($_POST['op2']);
					$opt3=test_input($_POST['op3']);
					$optans=test_input($_POST['ans']);

				}


				
				$quesTag=$xml->createElement("ques");
				$QuizTag->appendChild($quesTag);
				$nameTag=$xml->createElement("Name",$ques);
				$option1Tag=$xml->createElement("option1",$opt1);
				$option2Tag=$xml->createElement("option2",$opt2);
				$option3Tag=$xml->createElement("option3",$opt3);
				$ansTag=$xml->createElement("ans",$optans);
				$quesTag->appendChild($nameTag);
				$quesTag->appendChild($option1Tag);
				$quesTag->appendChild($option2Tag);
				$quesTag->appendChild($option3Tag);
				$quesTag->appendChild($ansTag);
				$xml->save('QuizLIst.xml');


		  ?>
	</body>

</html>