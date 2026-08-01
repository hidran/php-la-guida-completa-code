foreach ($xml->channel->item as $item) {
    echo $item->title;
    echo '<br>';
    echo $item->link;
    echo '<br>';
}
