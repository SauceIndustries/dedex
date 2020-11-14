<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Rule;

/**
 * All the releases described must be covered by a deal. Otherwise, it is 
 * suspicious and probably an unexpected thing.
 * 
 * Also checks that all releases used in deals are described in releases.
 *
 * @author Mickaël Arcos <@miqwit>
 */
class AllReleasesUsedInDeals extends Rule {
  protected $message = "All releases must be used in deals.";
  
  public function validates($newReleaseMessage): bool {
    $references = [];
    $references_used = [];
    $valid = true;
    
    // First get all resource references from SoundRecordings and Images
    foreach ($newReleaseMessage->getReleaseList()->getRelease() as $r) {
      foreach ($r->getReleaseReference() as $rr) {
        $references[] = $rr;
      }
    }
    
    // Second, browse all releases to check all references are used at least once.
    foreach ($newReleaseMessage->getDealList()->getReleaseDeal() as $rd) {
      foreach ($rd->getDealReleaseReference() as $drr) {
        $val = $drr;
        
        if (!in_array($val, $references)) {
          $this->message .= " The reference $val is used in a deal and has not been described.";
          $valid = false;
        }
        
        $references_used[] = $val;
      }
    }
    $references_used = array_unique($references_used);
    
    // All references must be in references_used
    if (array_intersect($references_used, $references) != $references) {
      $this->message .= " ".implode(", ", array_diff($references, $references_used))." not used in deals or not defined in ReleaseList.";
      $valid = false;
    }
    
    return $valid;
  }
}
