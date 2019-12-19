<?php
class web_controller extends base_controller{

    public function home(){
        
        require_once $this->_helpers->linkTo('index.php', 'Web', 'require');
    }

    public function contacto(){
        
        require_once $this->_helpers->linkTo('contacto.php', 'Web', 'require');
    }

    public function enviar()
    {
        try {
            $name     = $this->request['fname'];
            $email    = $this->request['email'];
            $subject  = $this->request['subject'];
            $content  = $this->request['msg'];
            $honeypot = $this->request['firstname'];
            if ($honeypot > 1) {
                echo $this->responseJSON(array('mensaje' => 'error'));exit;
            } else {
                $emailC = new SendEmail();
                $emailC->setName($name);
                $emailC->setLastname('');
                $emailC->setEmail($email);
                $emailC->setSubject($subject);
                $emailC->setEmailBody($emailC->generateBody($emailC->contenidoContacto($content, $email, $subject)));
                $emailC->setRecipient(''); //recipient Client email

                $result = $emailC->sendEmailKodigo();
                if ($result == "success") {
                    echo $this->responseJSON(array('mensaje' => 'success', 'result' => $result));exit;
                } else {
                    echo $this->responseJSON(array('mensaje' => 'error', 'result' => $result));exit;
                }
            }
        } catch (Exception $e) {
            echo "General Error.<br>" . $e->getMessage();
        }
    }

    public function programas(){
        
        require_once $this->_helpers->linkTo('programas.php', 'Web', 'require');
    }

    public function involucrate(){
        
        require_once $this->_helpers->linkTo('involucrate.php', 'Web', 'require');
    }

    public function bootcamp(){
        
        require_once $this->_helpers->linkTo('bootcamp.php', 'Web', 'require');
    }
    public function aprendizaje(){
        
        require_once $this->_helpers->linkTo('aprendizaje.php', 'Web', 'require');
    }
}