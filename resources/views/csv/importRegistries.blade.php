<!-- resources/views/upload-csv.blade.php -->
<form action="/upload-csv" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" accept=".csv">
    <button type="submit">Upload CSV</button>
</form>
