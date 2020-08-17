<html>
<body bgcolor="dodgerblue">
<style>
section{
  width: 100%;
  padding: 15px;
  height: 250px;
  background-color:white;
}
</style>
<header>
<h1 style="color:white;"><?php
session_start();
echo "Welcome  ".$_SESSION['nname'];
?>
</h1>
</header>
<section>

<table>
<tr>
<td><form action="kyc.php" method="post">
<button type="submit">KYC</button>
</form>
</td>
<td><form action="kyc.php" method="post">
<button type="submit">ACCOUNT</button></form></td>
<td><form action="kyc.php" method="post">
<button type="submit">INSURANCE</button></form></td>
<td><form action="kyc.php" method="post">
<button type="submit">LOAN</button></form></td>
<td><form action="prop.php" method="post">
<button type="submit">PROPERTY</button>
</form>
</td>
<td>
<button onclick="function()">REQUEST</button></td>

</section>
</body>
</html>
