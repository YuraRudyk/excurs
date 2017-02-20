tt_content {
    semexcontent_ordercontent < lib.fluidContent
    semexcontent_ordercontent {
        templateName = Ordercontent

        dataProcessing {
            0 = Rudyk\SemExContent\DataProcessing\OrdercontentDataProcessor
        }
    }
}