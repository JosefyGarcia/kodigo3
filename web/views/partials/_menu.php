
<div class="super_container" style="width: 100%;
    overflow: hidden;">
    
    <!-- Header -->

    <header class="header d-flex flex-row justify-content-end align-items-center trans_200 responsive-menu-wrap slicknav_menu" style="position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height:80px;
    background: rgba(0, 0, 0, 0.9);
    z-index: 10;">
        
        <!-- Logo -->
        <div class="logo mr-auto" >
        <a href="<?php echo $this->_helpers->linkTo('web/home') ?>"><img  src="../assets/images/logoK2.png" style=" height: 40px;" alt=""></a>
            
        </div>

        <!-- Navigation -->
        <nav class="main_nav justify-self-end text-right">
                <ul class="float-lg-right">
                <li class="active"><a href="<?php echo $this->_helpers->linkTo('web/web/home') ?>">Home</a></li>
                    <li><a href="<?php echo $this->_helpers->linkTo('web/web/programas') ?>">Programas</a></li>
                    <li ><a href="<?php echo $this->_helpers->linkTo('web/web/involucrate') ?>">Involucrate</a></li>
                    <li><a href="<?php echo $this->_helpers->linkTo('web/web/contacto') ?>">Contacto</a></li>
                    <li> 
                        <div class="btn btn-default btn-lg " style="background-color: #ff6600;">
                            <a href="<?php echo $this->_helpers->linkTo('index/pre_formulario') ?>" class="trans_200">Aplica Ahora</a>
                        </div>
                    </li>
                    
                </ul>
            
        </nav>
            <div class="hamburger_container bez_1">
                <i class="fas fa-bars trans_200"></i>
            </div>

    </header>

   
    
    <div class="menu_container">
            
                <div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
                <ul class="float-lg-right">
                <li><a href="<?php echo $this->_helpers->linkTo('web/web/home') ?>">Home</a></li>
                    <li style="padding-top:10px"><a href="<?php echo $this->_helpers->linkTo('web/web/programas') ?>">Programas</a></li>

                    <li style="padding-top:10px"><a href="<?php echo $this->_helpers->linkTo('web/web/involucrate') ?>">Involucrate</a></li>
                    <li style="padding-top:10px"><a href="<?php echo $this->_helpers->linkTo('web/web/contacto') ?>">Contacto</a></li>
                    <li style="padding-top:90px" > 
                        <div class="btn btn-default btn-lg " style="background-color: #ff6600;">
                            <a href="<?php echo $this->_helpers->linkTo('index/pre_formulario') ?>" class="trans_200">Aplica Ahora</a>
                        </div>
                    </li>
                </ul>

            </div>
