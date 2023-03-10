$(() => {
  const url =
    "https://graph.instagram.com/me/media?access_token=IGQVJYOHVoQ0lCenlwMks1d2Fwc2VIazFNRm1RNWI0RmZAHMGtzc0gzUkhvamNfUzZA6eTBQWHBBeWRzT01ZAS3BuSkI1SVNMOEg0NDRHV09wdHY3OUxhZAnJLZAzlGbkM2SFFxU01qOUt6NmdNcGVod2FxZAAZDZD&fields=caption,id,media_type,media_url,permalink,thumbnail_url,timestamp,username,children";

  $.get(url).then((response) => {
    let dados = response.data;
    let conteudo = document.querySelector("#feed");

    let tot = 0;

    const printFeed = (dados,p,c) => {
        tot = c;
        for (p; p < c; p++) {
            const feed = dados[p];
            let tipo = feed.media_type;
      
            if (tipo == "VIDEO") {
              conteudo.innerHTML += `
                      <div class="col-lg-3 p-1">
                          <a href="${feed.permalink}" target="_blank">
                              <div>
                                  <div class="play">
                                       <i class="fa-solid fa-play icone-play"></i>
                                  </div>
                                   <video muted loop>
                                       <source src="${feed.media_url}">
                                       </source>
                                   </video>
                              </div>
                          </a>
                      </div>`;
            } else if (tipo == "IMAGE") {
              conteudo.innerHTML += `
                      <div class="col-lg-3 p-1">
                          <a href="${feed.permalink}" target="_blank">
                              <div class="imagem_insta" style="background-image: url('${feed.media_url}');" alt=""></div>
                          </a>
                      </div>
                      `;
            }
          }
    }

    
    printFeed(dados, 0, 8);

    let moreBtn = document.querySelector("#moreBtn");
    moreBtn.addEventListener("click", () => {
        printFeed(dados,tot,tot+8);
    })

  });
});
