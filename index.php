<!DOCTYPE html>
<html>
<title>Exam</title>

<style>
    body {
        text-align: center;
        padding: 50px;
    }
    form {
        display: inline-block;
        margin:  auto;
    }
</style>
<body>





<div class="form-container">


<form id="class-form" action="/class/MergeSort.php">

    <select name="" id="action-changer">
        <option selected disabled>Select Sorting Method</option>
        <option value="/class/BubbleSort.php">Bubble Sort</option>
        <option value="/class/MergeSort.php">Merge Sort</option>
        <option value="/class/QuickSort.php">Quick Sort</option>
    </select>

    <input type="text" name="input" id="input" >
    <button type="submit">Sort</button>
</form>
</div>

<script>
    document.getElementById('action-changer').onchange = function() {
        var newaction = this.value;
        document.getElementById('class-form').action = newaction;
    };
</script>

</body>
</html>
