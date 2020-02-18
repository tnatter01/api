
<head>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <script>
        $(document).ready( function () {
            $('#table').DataTable({
                "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
                "iDisplayLength": 25
            });
        } );
    </script>
    <style>
    .btn-orange{
      background-color: #FFA500;
      font color: white;
    }
    </style>
</head>
<body>

<h2>Domeincontrole voor aanvraag of verhuizen <span style="color:red;">*</span></h2></div>
                        <form action="" method="post">
                    <!--Domein naam word hieringegeven-->
                    <input id="input" class="input" type="text" name="domein" placeholder="Plaats domein naam" value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>">
                    <button type="submit" id="btnSearch" class="btn-search"><i class="fa fa-search"></i>maak der wat moois van</button>
                </form>


            <table id="table">
            <thead>
            <tr>
            <th>Domein</th>
            <th>Status</th>
            <th>Prijs</th>
            <th>Aanvagen</th>
            <th>Verhuizen</th>
            </tr>
            </thead>
            <tbody>

<?php
$servername = "localhost";
$username = "tnatter_op";
$password = "gf3ALaRP";
$database = "tnatter_op";
$extensies = [];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlQuery = "SELECT * FROM prijs";

$result = $conn->query($sqlQuery);

for($k=0;$k<$result->num_rows;$k++){
    $row = $result->fetch_assoc();
        $extensies[$k]["ID"]=$row['ID'];
        $extensies[$k]["Extensie"]=$row['extensie'];
        $extensies[$k]["Prijs"]=$row['prijs'];
}

$conn->close();



  require_once('API.php');
  $api = new OP_API ('https://api.openprovider.eu');

  $username = "joy@smitpro.nl";
  $password = "TMmuUm@Hss4rP!p";

  $limit = 10;
  $offset = 0;

  if(isset($_POST['domein'])){
    if( strpos('.', $_POST['domein'] ) !== false) {

      $domein = $_POST['domein'];
      $domeinArray = explode('.', $domein);

  $domein = $domeinArray[0];
  $extensie = $domeinArray[1];

} else{
  $domein = $_POST['domein'];
}
//  $lijstExtensies = array("com","eu","top","nl","info","be","es","fr","art","net","org","shop","de","it","uk");
  $lijstExtensies = array("nl");



  $length = count($lijstExtensies);

  for ($i = 0; $i < $length; $i++) {

    $request = new OP_Request;

    $request->setCommand('checkDomainRequest')
    ->setAuth(array('username' => $username, 'password' => $password))
    ->setArgs(array(
      'domains' => array(
            array(
              'name' => $domein,
              'extension' => $lijstExtensies[$i]
            ),
          )
       )
    );
    $reply = $api->setDebug(0)->process($request);
    $reply = $api->process($request);
    if ($reply->getFaultCode() != 0) {
      die('Error ['.$reply->getFaultCode().'] occurred: '.$reply->getFaultString());
    }
    else {
      $availability = $reply->getValue();
      $availability = $availability[0]; // in this command, the response can contain multiple statuses

        $array_count = (count($extensies));
        $prijs = 9.95;
        for($k=$array_count;$k>0;$k--)
       {
            if($extensies[$k]['Extensie']==$lijstExtensies[$i])
            {
                $prijs = $extensies[$k]['Prijs'];
                break;
            }
        }

      echo '<tr><td>' . $availability['domain']. '</td><td>'. $availability['status'] . '</td><td>' . $prijs . '</td>' ;
    }
    echo '<td>' . '<button type="button" class="btn btn-success">aanvragen</button>';
    echo '<td>' . '<button type="button" class="btn btn-orange">verhuizen</button>';
}
}


  ?>

</tbody>
            </table>
</body>
