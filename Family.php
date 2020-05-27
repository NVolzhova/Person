<? 
class Person{
  public $name;
  public $lastname;
  public $age;
  public $mother;
  public $father;
  public $granddad;
  public $grandma;
  public $child;
  function __construct($n,$l,$a,$m=null,$f=null,$gd=null,$gm=null,$ch=null){
    $this->name = $n;
    $this->lastname = $l;
    $this->age = $a;
    $this->mother = $m;
    $this->father = $f;
    $this->granddad = $gd;
    $this->grandma = $gm;
    $this->child= $ch;
  }
  public function sayHi(){
    echo "Hi, my name is ".$this->name;
  }
  public function tellAboutYourParents(){
    $str = '';
    if ($this->mother == null and $this->father == null) $str = "Mother is null<br>Father is null<br>";
    else if ($this->mother == null) $str = "Mother  is null<br>My father: ".$this->father->name."<br>";
    else if ($this->father == null) $str = "Father is null<br>My mother: ".$this->mother->name."<br>";
    else
      $str = "My mother: ".$this->mother->name."<br>
              My father: ".$this->father->name."<br>
              My dad's father: ".$this->father->father->name."<br>
              My dad's mother: ".$this->father->mother->name."<br>
              My mum's father: ".$this->mother->father->name."<br>
              My mum's mother: ".$this->mother->mother->name."<br>
              My child: ".$this->child->name."<br>";
    return $str;
  }
}

$fedor = new Person ("Fedor","Ivanov",60,null,null,null,null,$alex);
$maria = new Person ("Maria","Ivanova",58,null,null,null,null,$alex);
$petr = new Person ("Peter","Petrov",59,null,null,null,null,$jula);
$irina = new Person ("Irina","Petrova",55,null,null,null,null,$jula);
$alex = new Person("Alex","Ivanov",36,$maria,$fedor,null,null);
$jula = new Person("Jula","Ivanova",34,$irina,$petr,null,null);
$lena = new Person ("Lena","Ivanova",12,$jula,$alex);
$olga = new Person("Olga","Ivanova",7,$jula,$alex);
$igor = new Person("Igor","Ivanov",3,$jula,$alex);

echo $lena->tellAboutYourParents();
?>
