/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    
    $('.cadastrar_disciplina').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            method: "POST",
            url: "/disciplinas/add",
            dataType: "JSON",
            data: {
                
            },
            success: function(){
                alert('ajhdkja');
            }
        });
    });
    
});


