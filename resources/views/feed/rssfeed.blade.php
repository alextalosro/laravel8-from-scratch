
<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ codecheef ]]></title>
        <link><![CDATA[ https://example.com/feed ]]></link>
        <description><![CDATA[ Laravel RSS Feed! ]]></description>
        <language>en</language>
        <pubDate>{{ now()->toDayDateTimeString('Europe/Bucharest') }}</pubDate>

        @foreach($posts as $post)
            <item>
                <title><![CDATA[{{ $post->title }}]]></title>
                <slug>{{ $post->slug }}</slug>
                <excerpt>{{ $post->excerpt }}</excerpt>
                <body>{{ $post->body }}</body>
                <category>{{ $post->category->name }}</category>
                <author>{{ $post->author->name }}</author>
                <pubDate>{{ $post->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
