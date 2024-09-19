



    
<div class="max-w-4xl mx-auto mt-10 p-8 bg-gradient-to-br from-white to-teal-50 rounded-xl shadow-xl mt-20 mb-4">
<?php 
   if (isset($_POST['ajouter'])) {
    $num = $_POST['Num'];
    $annee = $_POST['Annee'];
    $activite = $_POST['Activite'];
    $adresse = $_POST['Adresse'];
    $sign = $_POST['Sign'];
    $tel1 = $_POST['Tel1'];
    $tel2 = $_POST['Tel2'];
    $fax = $_POST['Fax'];
    $cont = $_POST['Cont'];
    $dir = $_POST['Dir'];
    $primes_lmp = $_POST['Primes_LMP'];
    $nbr_fac = $_POST['Nbr_Fac'];
    $d_gar = $_POST['D_Gar'];
    $date_ouver = $_POST['Date_Ouver'];
    $st_doss = $_POST['St_Doss'];
    $mt_encaiss = $_POST['MT_Encaiss'];
    $dte_enc = $_POST['Dte_Enc'];
    $ecart = $_POST['Ecart'];
    $observations = $_POST['Observations'];
    $dte_clot = $_POST['Dte_Clot'];
    $archive = $_POST['Archive'];

    if (!empty($num) && !empty($annee) && !empty($activite) && !empty($adresse) && !empty($sign) && !empty($tel1) && !empty($cont) && !empty($dir) &&
    !empty($primes_lmp) && !empty($nbr_fac) && !empty($d_gar) && !empty($date_ouver) && !empty($st_doss) && !empty($mt_encaiss)) {
    require_once 'include/database.php';
    $sqlState = $pdo->prepare('INSERT INTO ficherecou VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ');
    $sqlState->execute([$num,$annee,$activite, $adresse, $sign, $tel1, $tel2, $fax, $cont, $dir, $primes_lmp, $nbr_fac, $d_gar, $date_ouver, $st_doss, $mt_encaiss, $dte_enc, $ecart, $observations, $dte_clot, $archive]);

    echo '
    <div class="max-w-4xl mx-auto mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
        <strong class="font-bold">Success:</strong> 
        <span class="block sm:inline">Data has been successfully sent.</span>
    </div>';

} else {
    echo '
    <div class="max-w-4xl mx-auto mt-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
        <strong class="font-bold">Error:</strong> 
        <span class="block sm:inline">Please fill in all required fields.</span>
    </div>';
}
   }

?>

    <h2 class="text-3xl font-semibold mb-8 text-teal-700 text-center">FICHES RECOUVREMENT</h2>
    <form class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" method="post">

        <!-- Num -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="num">Num Police</label>
            <input name="Num" type="text" id="num" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter num">
        </div>

        <!-- Année -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="annee">Année</label>
            <input name="Annee" type="number" id="annee" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter année">
        </div>

        <!-- Activité -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="activite">Activité</label>
            <input name="Activite" type="text" id="activite" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter activité">
        </div>

        <!-- Adresse -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="adresse">Adresse</label>
            <input name="Adresse" type="text" id="adresse" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter adresse">
        </div>

  <!-- Sign -->
        <div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="sign">Sign</label>
    <input name="Sign" type="text" id="sign" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter sign">
</div>


           <!-- Tel1 -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="tel1">Tel1</label>
            <input name="Tel1" type="tel" id="tel1" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter tel1">
        </div>

        <!-- Tel2 -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="tel2">Tel2</label>
    <input name="Tel2" type="tel" id="tel2" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter tel2">
</div>


        <!-- Fax -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="fax">Fax</label>
            <input name="Fax" type="tel" id="fax" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter fax">
        </div>

        <!-- Cont -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="cont">Cont</label>
    <input name="Cont" type="text" id="cont" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter cont">
</div>

<!-- Dir -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="dir">Dir</label>
    <input name="Dir" type="text" id="dir" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter dir">
</div>

        <!-- Primes LMP -->
        <div>
            <label class="block text-base font-medium text-gray-700 mb-2" for="primes-lmp">Primes LMP</label>
            <input name="Primes_LMP" type="text" id="primes-lmp" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter primes lmp">
        </div>


        <!-- Nbr.Fac -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="nbr-fac">Nbr.Fac</label>
    <input name="Nbr_Fac" type="number" id="nbr-fac" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter nbr.fac">
</div>

<!-- D Gar -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="d-gar">D Gar</label>
    <input name="D_Gar" type="number" id="d-gar" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150">
</div>

<!-- Date Ouver -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="date-ouver">Date Ouver</label>
    <input name="Date_Ouver" type="date" id="date-ouver" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150">
</div>

<!-- St Doss -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="st-doss">St Doss</label>
    <input name="St_Doss" type="text" id="st-doss" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter st doss">
</div>

<!-- MT Encaiss -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="mt-encaiss">MT Encaiss</label>
    <input name="MT_Encaiss" type="text" id="mt-encaiss" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter MT encaiss">
</div>

<!-- Dte Enc -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="dte-enc">Dte Enc</label>
    <input name="Dte_Enc" type="date" id="dte-enc" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150">
</div>

<!-- Ecart -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="ecart">Ecart</label>
    <input name="Ecart" type="text" id="ecart" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter ecart">
</div>


        <!-- Observations -->
        <div class="lg:col-span-3">
            <label class="block text-base font-medium text-gray-700 mb-2" for="observat">Observations</label>
            <textarea name="Observations" id="observat" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter observations"></textarea>
        </div>

        <!-- Dte Clot -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="dte-clot">Dte Clot</label>
    <input name="Dte_Clot" type="date" id="dte-clot" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150">
</div>

<!-- Archive -->
<div>
    <label class="block text-base font-medium text-gray-700 mb-2" for="archive">Archive</label>
    <input name="Archive" type="text" id="archive" class="p-3 w-full border border-teal-300 rounded-lg text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent transition duration-150" placeholder="Enter archive info">
</div>


        <!-- Submit Button -->
        <div class="md:col-span-2 lg:col-span-3">
            <button name="ajouter" type="submit" class="w-full bg-teal-600 text-white py-3 rounded-lg hover:bg-teal-700 shadow-lg transition duration-300">Submit</button>
        </div>
    </form>
</div>

