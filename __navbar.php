<style>

    li.nav-item.active{
        background-color: #acff61;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="data_index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $page_name == 'data_list' ? 'active' : '' ?>">
                <a class="nav-link" href="data_list.php">列表 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
