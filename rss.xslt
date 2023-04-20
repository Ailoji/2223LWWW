<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="xml" version="1.0" encoding="UTF-8" indent="yes" />
  
  <xsl:template match="/">
    <rss version="2.0">
      <channel>
        <title>My RSS feed</title>
        <link>http://www.example.com</link>
        <description>My description</description>
        <language>en-us</language>
        
        <xsl:for-each select="//div[@class='row']">
          <item>
            <title><xsl:value-of select="div[@class='col link']/h2" /></title>
            <link><xsl:value-of select="div[@class='col link']/ul/a[1]/@href" /></link>
            <description><xsl:value-of select="div[@class='col link']/p" /></description>
          </item>
        </xsl:for-each>
        
      </channel>
    </rss>
  </xsl:template>
  
</xsl:stylesheet>
