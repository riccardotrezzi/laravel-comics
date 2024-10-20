

<header>
    <div class="container">
        <span>
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </figure>

            <nav>
                <ul>

                
                    <li>
                        <a href="#">CHARACTERS</a>
                    </li>
                    <li>
                        <a class="active" href="#">COMICS</a>
                    </li>
                    <li>
                        <a href="#">MOVIES</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">GAMES</a>
                    </li>
                    <li>
                        <a href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="#">VIDEOS</a>
                    </li>
                    <li>
                        <a href="#">FANS</a>
                    </li>
                    <li>
                        <a href="#">NEWS</a>
                    </li>
                    <li>
                        <a href="#">SHOP</a>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
</header>

<style scoped>
header {
  height: 100px;
}

header span{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header span img{
  width: 60px;
  padding: 20px 0 5px 0;
}

header ul {
  list-style: none;
  display: flex;
  justify-content: end;
  padding: 10px 0 0 0;
}

header ul li a {
  margin: 0px 10px;
  padding-bottom: 40px;
  text-decoration: none;
  color: black;
  font-size: 14px;
  transition: all .2s ease-in-out;
}

header ul li a:hover,
header ul li a.active {
  color: #097CEB;
  border-bottom: 5px solid #097CEB;
}
</style>
