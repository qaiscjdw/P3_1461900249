<style>
    input[type=text] {
  width: 100%;
}
</style>
<h1>Edit Data</h1>
<h2></h2>
<form action="{{ route('home.update') }}" method="post">
    @csrf
    ID  : <input type="text" name="id">
    NAMA    : <input type="text" name="nama">
    <button style="width: 5%;left:2%;top:33%;position:absolute" type="submit"> Tambah </button>
</form>
