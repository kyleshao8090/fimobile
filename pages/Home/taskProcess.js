$("#insertTask").on("submit", (e) => {
  e.preventDefault();
  var data = $("#insertTask").serialize()+"&submit=true";
  // var data = $("#insertTask").serializeArray();
  // var dataObj = {};
  // data.forEach(element => {
  //     dataObj[element.name]=element.value;
  // });

  $.ajax({
    url: "../db/taskProcess.php",
    type: "POST",
    data: data,
    success: function (response) {
      console.log("response ", response);
      $("#addTask").modal("hide");
      $("#insertTask")[0].reset();
    },
  });
  // $.post("../db/taskProcess.php",dataObj,(res)=>{
  //     console.log(res)
  // })
});


function getTasks() {
  var categoryId = $("#taskList").attr("data-id");
  $.ajax({
    url: "../db/taskProcess.php",
    headers:{
      // 'Accept':"application/json",
      // 'Content-Type':'application/json'
    },
    type: "POST",
    data: {
      categoryId: categoryId,
      alltask:true
    },
    success: function (response) {
      console.log("response ", response);
    }
  });
}
getTasks();
