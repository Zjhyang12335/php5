window.onload=function(){
    function hotChange(){//定义焦点轮播图函数
        //当前显示的图片索引（1-3）
        var currnet_index =0; 
        //设置定时器，每隔3秒自动调用函数autoChange
        var timer= window.setInterval(autoChange,3000); 
        //获取banner_pic（轮播图片）中的所有li元素
        var pic_li = document.getElementById("banner_pic").getElementsByTagName("li");
        //获取button（轮播图按钮）中的所有li元素
        var button_li = document.getElementById("button").getElementsByTagName("li");
        for(var i=0;i<button_li.length;i++){//遍历轮播图按钮
            button_li[i].onmouseover=function(){//鼠标滑过按钮触发事件
                if(timer){
                    clearInterval(timer);//停止计时器
                }
                for(var j=0;j<pic_li.length;j++){
                    if(button_li[j]==this){
                        currnet_index=j;
                        button_li[j].className="current";//设置按钮为选中状态
                        pic_li[j].className="current";//设置图片为当前显示图片
                    }
                    else{
                        button_li[j].className="but";//设置按钮为未被选中状态
                        pic_li[j].className="pic";//设置图片为不显示
                    }
                }
            }
            button_li[i].onmouseout=function(){//当鼠标滑出按钮时触发事件
                timer = setInterval(autoChange,3000);//重新启动定时器
            }
        }
        function autoChange(){//图片自动切换函数
            ++currnet_index;//图片索引加一
            if(currnet_index==3){//当索引值为3时，将其置0
                currnet_index = 0;
            }
           for(var i=0;i<3;i++){
                if(i==currnet_index){
                    pic_li[i].className = "current";//将当前图片的类名设置为current,使图片显示
                }else{
                    pic_li[i].className = "pic";//将图片的类名设置为pic，使图片隐藏
                }
           }
        }
    }
    hotChange();//调用焦点轮播图函数
}