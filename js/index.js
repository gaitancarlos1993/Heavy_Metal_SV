$(document).ready(function() {
    var scrollableDiv = document.getElementById("id_section2_cuerpo_index");
  
    scrollableDiv.addEventListener("mousedown", function(e) {
      if (e.target !== this) return;
      var startY = e.clientY,
          scrollTop = this.scrollTop;
  
      this.addEventListener("mousemove", function(e) {
        var y = e.clientY - startY;
        this.scrollTop = scrollTop - y;
      });
  
      this.addEventListener("mouseup", function() {
        this.removeEventListener("mousemove", null);
      });
    });
  
    scrollableDiv.addEventListener("mouseleave", function() {
      this.removeEventListener("mousemove", null);
    });
  });
  

  function mostrarSubCategorias(boton_cat){
    w_btn_categorias_index = boton_cat.id;
    w_btn_subcategorias_index = document.getElementById("id_btn_subcategorias_index");
    if (w_btn_subcategorias_index.style.display === "none" || w_btn_subcategorias_index.style.display === ""){
      w_btn_subcategorias_index.style.display = "block";
    }else{
      w_btn_subcategorias_index.style.display = "none";
      w_btn_subcategorias2_index.style.display = "none";
    }
  }

  function mostrarSubCategorias2(){
    w_btn_subcategorias_index = document.getElementById("id_btn_subcategorias_index");
    w_btn_subcategorias2_index = document.getElementById("id_btn_subcategorias2_index");
    
    if (w_btn_subcategorias2_index.style.display === "none" || w_btn_subcategorias2_index.style.display === ""){
      w_btn_subcategorias2_index.style.display = "block";
    }else{
      w_btn_subcategorias2_index.style.display = "none";
    }
  }

  function manageMenu(){
    w__div_categorias2 = document.getElementById("id_div_categorias2");
    w_section2_cuerpo_index = document.getElementById("id_section2_cuerpo_index");
    

    if (w__div_categorias2.style.display === "none" || w__div_categorias2.style.display === ""){
      w__div_categorias2.style.display = "block";
    }else{
      w__div_categorias2.style.display = "none";
      w_section2_cuerpo_index.width = "72%";
    }

  }