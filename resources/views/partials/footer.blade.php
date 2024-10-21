
<footer>
    <div class="link-footer">
        <div class="container row">
            <div class="col-1-3">
              <div>
                <h4>dc comics</h4>
                <ul>
                  @foreach($menuLinkDcComics as $linkComics)
                    <li>
                        <h6>
                          {{ $linkComics['name'] }}
                        </h6>
                    </li>
                  @endforeach
                </ul>
              </div>
              <div>
                <h4>shop</h4>
                <ul>
                  @foreach($menuLinkShop as $shop)
                    <li>
                        <h6>
                          {{ $shop['name'] }}
                        </h6>
                    </li>
                  @endforeach
                </ul>
              </div>
              <div>
                <h4>dc</h4>
                <ul>
                  @foreach($menuLinkDc as $dc)
                    <li>
                        <h6>
                          {{ $dc['name'] }}
                        </h6>
                    </li>
                  @endforeach
                </ul>
              </div>
              <div>
                <h4>sites</h4>
                <ul>
                  @foreach($menuLinkSites as $sites)
                    <li>
                        <h6>
                          {{ $sites['name'] }}
                        </h6>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
        </div>
    </div>
    <div class="sign-footer">

    </div>
</footer>

