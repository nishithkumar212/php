<?php
/**
 * Generating an interface named ItemElement
 */
interface ItemElement
{
    public function accept(CartVisitor $visitor);
}
