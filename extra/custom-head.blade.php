{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style>
@font-face{font-family:'sottitle';src:url('{{themeAsset('windlass.ttf')}}')}
@font-face{font-family:'sottext';src:url('{{themeAsset('pragroman.ttf')}}')}

@media (max-width: 400px) {
  .button,
    button {
      display: inline-block;
      text-decoration: none;
      text-align: center;
      vertical-align: middle;
      font-size: 14px !important;
      color: #fff !important;
      height: 48px;
      width: 100%;
      font-weight: 100;
      line-height: 48px;
      letter-spacing: 0.1px;
      white-space: wrap;
      cursor: pointer;
      font-family: "sottext", sans-serif !important;
      text-transform: uppercase;
      background: url({{themeAsset('../../turquoise-button-sprite.svg#off')}}) 0 0/100% 100% no-repeat !important;
     }
  }
  
  @media (max-width: 550px) {
    .button,
      button {
        display: inline-block;
        text-decoration: none;
        text-align: center;
        vertical-align: middle;
        font-size: 14px !important;
        color: #fff !important;
        height: 48px;
        width: 80%;
        font-weight: 100;
        line-height: 48px;
        letter-spacing: 0.1px;
        white-space: wrap;
        cursor: pointer;
        font-family: "sottext", sans-serif !important;
        text-transform: uppercase;
        background: url({{themeAsset('../../turquoise-button-sprite.svg#off')}}) 0 0/100% 100% no-repeat !important;
       }
    }

  @media (min-width: 551px) {
  .button,
    button {
      display: inline-block;
      text-decoration: none;
      text-align: center;
      vertical-align: middle;
      font-size: 14px !important;
      color: #fff !important;
      height: 60px;
      width: 400px;
      font-weight: 100;
      line-height: 60px;
      letter-spacing: 0.1px;
      white-space: wrap;
      cursor: pointer;
      font-family: "sottext", sans-serif !important;
      text-transform: uppercase;
      background: url({{themeAsset('../../turquoise-button-sprite.svg#off')}}) 0 0/100% 100% no-repeat !important;
     }
  }

  .sharebutton,
  sharebutton {
    display: inline-block;
    text-decoration: none;
    height: 48px;
    text-align: center;
    vertical-align: middle;
    font-size: 14px;
    width: 48px;
    font-weight: 100;
    line-height: 48px;
    letter-spacing: 0.1px;
    white-space: wrap;
    border-radius: 8px;
    cursor: pointer;
    color: #fff !important; 
    background: url({{themeAsset('../../green-button-sprite.svg#off')}}) 0 0/100% 100% no-repeat !important;
   }
@media screen and (min-width: 600px) {
  .sharebutton,
  sharebutton {
    display: inline-block;
    text-decoration: none;
    height: 48px;
    text-align: center;
    vertical-align: middle;
    font-size: 14px;
    width: 150px;
    font-weight: 100;
    line-height: 48px;
    letter-spacing: 0.1px;
    white-space: wrap;
    border-radius: 8px;
    cursor: pointer;
    color: #fff !important; 
    background: url({{themeAsset('../../green-button-sprite.svg#off')}}) 0 0/100% 100% no-repeat !important;
   }
}
html {
    font-size: 100%; }
      body {
        font-size: 18px;
        line-height: 24px;
        font-weight: 400;
        color: #F1F1F1  !important;
        font-family: "sottext", sans-serif;
        text-transform: uppercase;
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ),
		url({{themeAsset('../../background.jpg')}});
        background-size: cover;
        color: #222; }
</style>