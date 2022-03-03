<!DOCTYPE html>
<html>
    <head>
        <title>First Project</title>
    </head>
    <body>
        <h1 align="center"> <?php echo 'The Fisrt Project Test on php'; ?></h1>
        <?php
            $name='hassan tawfik';
            echo 'My name is : '.$name.'<br>';
            //Echo 'My name is : '.$Name.'<br>';


            //class and object eg ---------------------------------------------------------------------------------
            class Client{
                public $name;
                public $age;

                public function __construct($name,$age){
                    $this->name = $name;
                    $this->age = $age;
                }

                public function message(){
                    return 'The Name of the client is '.$this->name.', and his age is '.$this->age.'<br>';
                }
            }

            $name1="hassan";
            $age1=23;

            $client=new Client($name1 , $age1);
            echo $client->message();
            //----------------------------------------------------------------------------------------------------------

            //String functions -----------------------------------------------------------------------------------------
            echo strlen('the best in the world!'); //length of string
            echo '<br>';
            echo strrev('the best in the world!'); // reverse string
            echo '<br>';
            echo strpos('the best in the world!' , 'in'); // postion of word or char in a string
            echo '<br>';
            echo str_replace("world","country","the best in the world!"); //replace word or char in a string
            echo '<br>';
            //-----------------------------------------------------------------------------------------------------------

            //Math 
            $r=3;
            echo "the circle area is ".(pi()*$r).'cm'; //pi = 3.14
            echo '<br>';
            echo min(200,10,20,50,-60,-10,0); // min number
            echo '<br>';
            echo max(200,10,20,50,-60,-10,0); // max number
            echo '<br>';
            echo abs(-250); //return the postive value
            echo '<br>';
            echo sqrt(81); // return the square root of number
            echo '<br>';
            echo round(2.56); // rounds float number to integer
            echo '<br>';
            echo round(2.48); // rounds float number to integer
            echo '<br>';
            echo rand(); // return random number
            echo '<br>';
            echo rand(10,20); // return random number between 10 and 20
            echo '<br>';
            //------------------------------------------------------------------------------------------------------------------

        ?>
    </body>
</html>