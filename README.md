# Answer the questions in 20_tasks

1. Почему мы не использовали такую структуру массива

["john","jane","alex"];

а использовали такую  

[
  ["name"⇒"John"],
  ["name"⇒"Jane"]
];

Ведь первый вариант тоже будет технически работать одинаково. Тогда зачем мы использовали второй вариант?<br>
<b>A: Через ассоциативный массив легче брать значения по ключу, чем запоминать индекс значения в массиве. Технический можно, но практический невозможно работать с массивом без ключа при переборе</b><br><br>


2. Мы хотим добавить новый элемент массива. Почему это так важно не менять его структуру при добавлении нового элемента?<br>
<b>A: Возможно, с этим массивом уже работает какая та функция, и не соблюдение структуры приведет к ошибке</b><br><br>


3. Каким образом формируется массив элементов? Нужно описать процесс формирования массива. Например, смотря на верстку, как вы понимаете какая у массива должна быть структура? Как вы определяете какие будут поля в массиве?<br>
<b>A: Для элементов верстки, которые повторяются - создается переменные, они хранятся в массиве для последующего применения в цикле</b><br><br>


4. Почему для вывода списка важно, чтобы структура html блока была единой?<br>
<b>A: Парсер должен понимать что html, а что php</b><br><br>


5. Дан список элементов. Структура html блока у них разная. У одного элемента div style=”padding: 20px;”, у следующего style=”padding: 30px;”, а у третьего вообще нет стилей. Ваши действия?<br>
<b>A: отдельная переменная для значений padding, отдаем ситуативно, может быть null</b><br><br>

   
6. Когда лучше использовать

foreach($items as $item) {

}

а когдa

foreach($items as $item):

endforeach;

Приведите примеры.<br>
<b>A: Я сам такое не использую, но второй вариант внутри верстки лучше читается, думаю для этого она и придумано</b><br><br>

 
7. Приведите пример тернарного оператора в своем коде. Почему вы использовали именно такой подход, а не полноценный вариант написания условия?<br>
<b>A: К сожалению не помню где, но пользовался при маленьких условиях, к примеру: можно через тернарным оператором реализовать 5-вопрос с padding-ом</b><br><br>


