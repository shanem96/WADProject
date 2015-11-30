<?xml version="1.0" encoding="UTF-8" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

    <xsl:template match="/">
    <html>
    <head><title>Brand and Product Listings</title></head>
    <body>
    <h1>Mens Catalogue</h1>
	Brands:
	<ul>
    	<xsl:for-each select="//brand_name">
    		<xsl:sort select="."/>
    		   <xsl:choose>
    		   	<xsl:when test="../@webbrand!='no'">
    			<li>
    			<xsl:element name="a">
    				<xsl:attribute name="href">
    					#<xsl:value-of select="."/>
    				</xsl:attribute>
    				<xsl:value-of select="."/>
    			</xsl:element>
    			</li>
    		   </xsl:when>
    		   <xsl:otherwise>
    		   	<li><xsl:value-of select="."/></li>
    		   </xsl:otherwise>
    		   </xsl:choose>
    	</xsl:for-each>	
	</ul>

	<xsl:for-each select="//brand">
		<xsl:sort select="brand_name"/>
    		   <xsl:if test="@webbrand!='no'">
    			<xsl:apply-templates/>
    	   	</xsl:if>	
    	</xsl:for-each>
    </body>
    </html>
    </xsl:template>
    
    <xsl:template match="*">
        <xsl:apply-templates/>
    </xsl:template>
    
    <xsl:template match="text()">
        <xsl:apply-templates/>
    </xsl:template>
    
    <xsl:template match="product">
        <ul><li>
            <xsl:value-of select="short_desc"/>
          
            <xsl:if test="available[@colour]">
            	<p>Available colours:
            	<br/><xsl:apply-templates select="available[@colour]"/>
            	</p>
            </xsl:if>
            <p>Price: <xsl:value-of select=".//price[@pricetype='sale'] | 
            			     .//price[@pricetype='retail']"/></p>
            
        </li></ul>
    </xsl:template>
    
    <xsl:template match="available[@colour and @location='warehouse']">
    	--<xsl:value-of select="@colour"/><br/>
    </xsl:template>

    <xsl:template match="product/product_id">
        (<xsl:value-of select="."/>)
    </xsl:template>
    
    <xsl:template match="brand_name">
    	<xsl:if test="../@webbrand!='no'">
    	<xsl:element name="a">
    		<xsl:attribute name="name"><xsl:value-of select="."/>
    		</xsl:attribute>
       		<h3><xsl:value-of select="."/></h3>
       	</xsl:element>
       	</xsl:if>
    </xsl:template>

</xsl:transform>
