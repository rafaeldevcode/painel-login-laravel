<aside class="menu-aside">
    <nav class="nav">
        <ul class="p-0">
            @auth
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <a class="text-decoration-none" title="Sessão 1" href="#">Sessão 1</a>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <a class="text-decoration-none" title="Sessão 2" href="#">Sessão 2</a>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <a class="text-decoration-none" title="Sessão 2" href="#">Sessão 3</a>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <details>
                        <summary>Sessão 4</summary>
                        <ul class="p-0">
                            <li>
                                <a class="text-decoration-none" title="Item 1" href="#">Item 1</a>
                            </li>
                            <li>
                                <a class="text-decoration-none" title="Item 2" href="#">Item 2</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="border-0 p-0 btn-transparent fw-bolder text-white bg-transparent d-flex flex-row" type="submit" title="Fazer logout">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </div>
                            Sair
                        </button>
                    </form>
                </li>
            @endauth
            
            @guest
                <li>
                    <div class="icon">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </div>
                    <a class="text-decoration-none" title="Fazer login" href="/login">Entrar</a>
                </li>
            @endguest
        </ul>
    </nav>
</aside>