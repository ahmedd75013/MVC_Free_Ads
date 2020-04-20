document.getElementById("newtask").addEventListener(
  "click",
  function() {
    let input = document.getElementById("task").value;
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
      li = document.getElementById("list_todo").removeChild(li);
      document.getElementById("list_done").appendChild(li);
      li.removeChild(b1);
      currentList = "list_done";
    });

    b2.addEventListener("click", function() {
      document.getElementById(currentList).removeChild(li);
    });



    li.appendChild(h2);
    li.appendChild(b1);
    li.appendChild(b2);
    document.getElementById("list_todo").appendChild(li);
  },
  false
);