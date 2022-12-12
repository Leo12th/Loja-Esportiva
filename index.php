
    <?php



   class Roupa{

    public $modelo;
    public $color;
    public $valor;
    public $tamanho;
    public $desconto;

 

    function __construct($modelo,$color,$valor,$tamanho,$desconto){
      $this->modelo = $modelo;
      $this->color = $color;
      $this->valor = $valor;
      $this->tamanho = $tamanho;
      $this->desconto = $desconto;
    }
    function get_modelo(){
      return $this->modelo;
    }
    function get_color(){
      return $this->color;
    }
    function get_valor(){
      return $this->valor;
    }
    function get_tamanho(){
      return $this->tamanho;
    }
    function get_desconto(){
      return $this->desconto;
    }

 

   
    
   }
   
   $adidas = new roupa('Academia','Preta','200','G','0.95');
   listar($adidas);
   $nike = new roupa('Topless','roxa','160','G','0');
   listar($nike);
   function listar($roupa){
    echo "Tipo de roupa = ";
    echo $roupa->get_modelo();
    echo "<br>";
    echo "Tamanho       = ";
    echo $roupa->get_tamanho();
    echo "<br>";
    echo "Cor           = ";
    echo $roupa->get_color();
    echo "<br>";
    echo "Descoto       = ";
    echo $roupa->get_desconto();
    echo "<br> ";
    echo "Valor         = ";
    echo $roupa->get_valor();
    echo "<br>";
    echo "<br>";
    echo "<br>";

  }
  

  
    ?>
