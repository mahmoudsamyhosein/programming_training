// alert("مرحبا  بك في جافا سكربت");
// varibles المتغيرات[var == let ]
let name = "mahmoud samy hosein";
var  age = 27;
let work = "I work as php programmer";
var salary = "8000 EGP";
// الارقام والحروف المقبولة _NAME $name حساسة لحالة الأحرف case sensitive 
//الثوابت لاتتغير قيمته أبدا والأ يحدث خطأ 
const pi = 3.14;
/**
 *  اللغة عامة حساسة لحالة الأحرف
 * فمثلا للتصريح عن متغير لا بد أن يتم الألتزام بقواعد التسمية فمثلا 
 * Let لن تتعرف عليها اللغة أبدا 
 * Var أيضا لن تتعرف عليها اللغة 
 * + تستخدم لربط النصوص أو المتغيرات مع بعضها البعض  concatination
 */
let newage = 27;

let profilo = "mahmoud samy hosein metwaly " + "and age is " ;

let first_name , second_name ;

first_name = "mahmoud";  second_name ="samy hosein metwaly" ;


//للطباعة بداخل الكونسول console
console.log("مرحبا , أسمي هو محمود سامي حسين متولي ");
//للطباعة بداخل المتصفح
document.write("السلام عليكم ورحمه الله وبركاته");

let h1_title = document.getElementById("title");

h1_title.innerHTML = "iam an h1 text pla pla pla pla ";
