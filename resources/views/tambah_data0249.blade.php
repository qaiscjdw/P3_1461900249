<style>
    input[type=text] {
  width: 100%;
}
</style>
<h1>Tambah Data</h1>
<h2></h2>
<form action="{{ route('home.store') }}" method="post">
    @csrf
    NAMA    : <input type="text" name="nama">
    ALAMAT  : <input type="text" name="alamat">
    BARANG : 
    <select name="barang" style="width: 100%;height:5%">
        <option value=""> Select </option>
        <option value="sepatu"> SEPATU</option>
        <option value="baju"> BAJU </option>
    </select>
    <button style="width: 5%;left:2%;top:33%;position:absolute" type="submit"> Tambah </button>
</form>
