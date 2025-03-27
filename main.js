// main.js
// required functions for index.html


// loads file designated in e's data-src attribute as html/text inside e
async function loadSrc(e){
  e.addClass("text-center")
  e.html('<div class="spinner-border mt-3"></div>')
  e.load(e.data('src'))
  if(e.html().trim() != ""){
    e.html('<div class="spinner-border mt-3"></div>')
    e.load(e.data('src'))
  }
  e.removeClass("text-center")
}

function updateActiveLinks(selector){
  let links = $(selector).find("a.nav-link")
  links.each(() => {
    if(location.hash.includes($(this).attr("href"))){
      $(this).parent().addClass('active')
    }else{
      $(this).parent().removeClass('active')
    }
  })
}

async function nav(input){
  if(typeof input != "string"){
    console.log("Nav failed due to input: "+JSON.stringify(input))
    return
  }
  let e = $("#content_area")
  let attempts = 1
  const allow = 3
  e.addClass("text-center")
  while(attempts <= allow){
    e.html('<div class="spinner-border mt-5"></div>')
    e.load((input[0] == '/') ?"."+input :input)
    if(e.html().trim() != ""){
      e.removeClass("text-center")
      return
    }else{
      attempts+= 1
    }
    if(attempts > allow){
      location.reload()
    }
  }
}

async function route(){
  // route on hash
  // all linked paths follow patterns #/file or #/dir/file
  let loc = location.hash.replace('#', '')
  if(["", "/"].includes(loc)){
    // load srcs
    loadSrc($("#menu_m"))
    loadSrc($("#menu_w"))

    // load home
    nav("home.html")
  }else{
    if($.trim($("#menu_m").html()) == ''){
      loadSrc($("#menu_m"))
    }
    if($.trim($("#menu_w").html()) == ''){
      loadSrc($("#menu_w"))
    }

    // load page
    nav(loc+".html")

    // load submenus
    // if(loc.includes("path/")){}

    // page specific handling
    if(loc == "archive"){
      $.get("posts/index.json", (data) => {
        let posts = data //JSON.parse(data)
        for(let i of posts){
          $("#archive_list").append(`<a href="#posts/${i.date}" class="list-group-item list-group-item-action nostyle-link">
            <strong>${i.date}</strong> - ${i.title}<br>${i.desc}</a>`)
        }
      })
    }


  }
}