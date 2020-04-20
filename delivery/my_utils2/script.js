/*<li class="item">
    <h2 class="subitem">Name</h2>
    <button class="subitem">
      Fini
    </button>
    <button class="subitem">
      Suppr
    </button>
</li>;*/

$("#newtask").click(() => {
    let input = $("#task").val();
    let currentList = "list_todo";
  
    let li = document.createElement("li");
    li.classList.add("item");
  
    let h2 = document.createElement("h2");
    h2.classList.add("subitem");
    h2.innerHTML = input;
  
    let b1 = document.createElement("button");
    b1.classList.add("subitem");
    b1.innerHTML = "Fini";
  
    let b2 = document.createElement("button");
    b2.classList.add("subitem");
    b2.innerHTML = "Suppr";
  
    b1.addEventListener("click", function() {
      li = $("#list_todo")[0].removeChild(li);
      $("#list_done").append(li);
      li.removeChild(b1);
      currentList = "list_done";
    });
  
    b2.addEventListener("click", function() {
      $("#" + currentList)[0].removeChild(li);
    });
  
    li.appendChild(h2);
    li.appendChild(b1);
    li.appendChild(b2);
    $("#list_todo").append(li);
  });
  
  $("#save").click(() => {
    let list_done = $("#list_done li h2");
    let list_todo = $("#list_todo li h2");
  
    let todo_send = [];
    for (let i = 0; i < list_todo.length; i++) {
      todo_send.push(list_todo[i].innerHTML);
    }
  
    let done_send = [];
    for (let i = 0; i < list_done.length; i++) {
      done_send.push(list_done[i].innerHTML);
    }
  
    $.ajax({
      type: "POST",
      url: "./save.php",
      data: {
        todo: todo_send,
        done: done_send
      },
      success: val => {
        $("#result").append(val);
      }
    });
  });
  
  $("#load").click(() => {
    $.ajax({
      type: "GET",
      url: "./load.php",
      success: val => {
        val = JSON.parse(val);
        for (let i in val) {
          if (val[i]["list"] == "todo") {
            let input = val[i]["value"];
            let currentList = "list_todo";
  
            let li = document.createElement("li");
            li.classList.add("item");
  
            let h2 = document.createElement("h2");
            h2.classList.add("subitem");
            h2.innerHTML = input;
  
            let b1 = document.createElement("button");
            b1.classList.add("subitem");
            b1.innerHTML = "Fini";
  
            let b2 = document.createElement("button");
            b2.classList.add("subitem");
            b2.innerHTML = "Suppr";
  
            b1.addEventListener("click", function() {
              li = $("#list_todo")[0].removeChild(li);
              $("#list_done").append(li);
              li.removeChild(b1);
              currentList = "list_done";
            });
  
            b2.addEventListener("click", function() {
              $("#" + currentList)[0].removeChild(li);
            });
  
            li.appendChild(h2);
            li.appendChild(b1);
            li.appendChild(b2);
            $("#list_todo").append(li);
          } else {
            let input = val[i]["value"];
            let currentList = "list_done";
  
            let li = document.createElement("li");
            li.classList.add("item");
  
            let h2 = document.createElement("h2");
            h2.classList.add("subitem");
            h2.innerHTML = input;
  
            let b2 = document.createElement("button");
            b2.classList.add("subitem");
            b2.innerHTML = "Suppr";
  
            b2.addEventListener("click", function() {
              $("#" + currentList)[0].removeChild(li);
            });
  
            li.appendChild(h2);
            li.appendChild(b2);
            $("#list_done").append(li);
          }
        }
      }
    });
  });