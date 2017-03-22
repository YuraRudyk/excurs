tt_content {
    semexcontent_order < lib.fluidContent
    semexcontent_order {
        templateName = OrderItem

        dataProcessing {
            0 = Rudyk\SemExContent\DataProcessing\OrderItemDataProcessor
        }
    }
}