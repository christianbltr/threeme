lib.parseFunc {
    tags {
        link {
            typolink {
                # Fonticons styled link classes
                ATagBeforeWrap = 1
                wrap.prepend = TEXT
                wrap.prepend {
                    data = parameters:allParams
                    listNum = 2
                    listNum.splitChar = 32
                    required = 1
                    wrap = <i class="fa threeme-ui-|" aria-hidden="true"></i>

                    # If more than one class is set, they are wrapped with " - we need to remove them.
                    replacement {
                        10.search = "
                        10.replace =
                    }
                }
            }
        }
    }
}