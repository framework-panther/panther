<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Loja 3.0</title>
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.png" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">        

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">   
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?><span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>contact"><?php $this->lang->get('CONTACT'); ?></a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">   
                    <li class="nav-item dropdown">                       
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php $this->lang->get('LANGUAGE'); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <p class="topnav-text">
                                <img src="<?php echo BASE_URL; ?>assets/images/en-gb.png" /><a href="<?php echo BASE_URL; ?>lang/set/en"> English</a>
                            <p>
                            <p class="topnav-text">
                                <img src="<?php echo BASE_URL; ?>assets/images/pt-br.png" /><a href="<?php echo BASE_URL; ?>lang/set/pt-br"> Português</a>
                            <p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>login"><?php $this->lang->get('LOGIN'); ?></a>
                    </li>
                </ul>
            </div>            
        </nav>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo.svg" /></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="head_help">(11) 9999-9999</div>
                        <div class="head_email">contato@<span>loja3.com.br</span></div>

                        <div class="search_area">
                            <form method="GET">
                                <input type="text" name="s" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
                                <select name="category">
                                    <option value=""><?php $this->lang->get('ALLCATEGORIES'); ?></option>
                                </select>
                                <input type="submit" value="" />
                            </form>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo BASE_URL; ?>cart">
                            <div class="cartarea">
                                <div class="carticon">
                                    <div class="cartqt">9</div>
                                </div>
                                <div class="carttotal">
                                    <?php $this->lang->get('CART'); ?>:<br/>
                                    <span>R$ 999,99</span>
                                </div>
                            </div>
                        </a>
                    </div>                  
                </div>                
            </div>
        </header>

        <!-- xxxxxxxxxxxxxxxx---->
        <nav class="navbar navbar-expand-md" style="background-image: linear-gradient(to right, #00A7EC, #C7DEE8);">    

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="dropdown">
                <img srcset="<?php echo BASE_URL; ?>assets/images/list.svg 800w"
                     sizes="(max-width: 799px) 0vw,
                     (min-width: 800px) 800px"
                     src="<?php echo BASE_URL; ?>assets/images/list.svg">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background: #00A7EC;">
                    <?php $this->lang->get('SELECTCATEGORY'); ?>
                </button>
                <div class="dropdown-menu">
                    <?php foreach ($viewData['categories'] as $cat): ?>
                        <a class="dropdown-item" href="#">
                            <?php echo $cat['name']; ?>   
                        </a>
                    <div class="dropdown-item">
                        <?php
                            if (count($cat['subs']) > 0) {
                                $this->loadView('menu_subcategory', array(
                                    'subs' => $cat['subs'],
                                    'level' => 1
                                ));
                            }
                        ?>
                        <div>
                            <?php endforeach; ?>
                        </div>
                    </div>        
                </div>
            </div>           
        </nav>
        <!-- xxxxxxxxxxxxxxxx---->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside>
                            <h1><?php $this->lang->get('FILTER'); ?></h1>
                            <div class="filterarea">

                            </div>

                            <div class="widget">
                                <h1>Produtos em Destaque</h1>
                                <div class="widget_body">
                                    ...
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1><?php $this->lang->get('FEATUREDPRODUCTS'); ?></h1>
                            <div class="widget_body">
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1><?php $this->lang->get('ONSALEPRODUCTS'); ?></h1>
                            <div class="widget_body">
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1><?php $this->lang->get('TOPRATEDPRODUCTS'); ?></h1>
                            <div class="widget_body">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subarea">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto" style="width: 600px;">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                                <form method="POST">
                                    <input class="subemail" name="email" placeholder="<?php $this->lang->get('SUBSCRIBETEXT'); ?>">
                                    <input type="submit" value="<?php $this->lang->get('SUBSCRIBEBUTTON'); ?>" />
                                </form>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php echo BASE_URL; ?>" /><img width="150" src="<?php echo BASE_URL; ?>assets/images/logo.svg" /></a><br/><br/>
                            <strong>Slogan da Loja Virtual</strong><br/><br/>
                            Endereço da Loja Virtual
                        </div>
                        <div class="col-sm-8 linkgroups">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><?php $this->lang->get('CATEGORIES'); ?></h3>
                                    <ul>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3><?php $this->lang->get('INFORMATION'); ?></h3>
                                    <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3><?php $this->lang->get('INFORMATION'); ?></h3>
                                    <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">© <span>Loja 3.0</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?></div>
                        <div class="col-sm-6">
                            <div class="payments">
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.5.1.slim.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>

    </body>
</html>