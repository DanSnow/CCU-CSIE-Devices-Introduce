ShadowBox.init
  modal:true
description = null
$.ajax
  url: "./description.json"
  type: "GET"
  dataType: "json"
  success: (jData) ->
    description = JSON.parse(jData)
  error: ->
    alert "無法取得圖片描述"
for link in $(".link")
  link.click ->
    for pic in $(".pic")
      pic.setAttribute "rel", "shadowbox["+link.text+"]"
      pic.setAttribute "title",
        description[pic.getAttribute("data-pic-id")]
