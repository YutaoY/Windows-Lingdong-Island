# 灵动岛Windows版本

### 一、项目介绍

灵动岛是ipone14 pro推出的。安卓端也有人做过。

所以，寻思电脑端没有，那就自己做一个吧。

（安装到班上的电脑。老师讲课时...嘿嘿。咳咳，不作死就不会死）

> 效果展示：[【windows上的灵动岛，还挺灵动的吧】 https://www.bilibili.com/video/BV1fg411a7ji/](https://www.bilibili.com/video/BV1fg411a7ji/ "灵动岛效果展示视频")

### 二、工程介绍

**项目结构大纲及其作用**

| 名称            | 类型   | 用处                                  |
| --------------- | ------ | ------------------------------------- |
| img             | 文件夹 | 用于存放图片文件，其中有开屏图片      |
| fasong.html     | HTML   | 客户端。前端数据发送页面              |
| index.html      | HTML   | 客户端。前端数据展示页面              |
| index.php       | PHP    | 服务端。可用于初始化数据库等          |
| receiveData.php | PHP    | 服务端。处理并返回数据进行展示        |
| sendData.php    | PHP    | 服务器。发送并处理数据到数据库        |
| zizhi.min.js    | JS     | 网络请求组件。代码块 `zz.request()` |

jquery.min.js就不必解释了吧。

**数据库结构大纲及其作用**

| 名称 | 类型     | 长度 | 空值 | 小数点 | 主键 |
| ---- | -------- | ---- | ---- | ------ | ---- |
| id   | int      | 250  | 0    | 0      | 1    |
| data | longtext | 0    | 0    | 0      |      |

记得设置 `id` 为自动递增哦~

以上仅为结构展示，无需一致，根据自己的需求填写即可（id，data 是必有的）

### 三、如何使用

> 使用前，请配置 `receiveData.php` 、`sendData.php` 、`index.php` 文件里的 “***数据库IP地址***”，“***数据库用户名***”、“***数据库密码***”和“***数据库名***”，将其填写为自己的信息。

配置好PHP文件里的数据库信息后，就可以愉快地开始 ~~灵动~~ 使用了

直接运行 `index.php` 文件即可。

> 当然，这样只在浏览器上展示还不行。
>
> 要做到演示视频里的效果，就得用 [electron](https://www.electronjs.org/zh/docs/latest/ "electron官方文档") 弄成桌面程序，再打包成exe文件，就十全十美了。
>
> （弄成桌面程序可在B站上查找，打包为exe文件可以用NSIS）

### 四、声明、注意事项

1. 此项目仅供娱乐，**禁止商用**。
2. 此项目可**个人**随意使用，可进行二次开发。
3. **此项目进行二次开发后，本人不承担所引发的任何后果**。

---

> **好啦，分享完毕。**
>
> **最后，感谢支持！**
>
> **代码写的很乱，是个编程小白，还请见谅！**
