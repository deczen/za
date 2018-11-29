import $ from 'jquery';

import BaseModalView from 'legacy/Base/view.modal';
import template from 'templates/modals/mortgage/base.hbs';

export default class MortgageCalculatorView extends BaseModalView {
  get id() {
    return 'mortgage-calculator';
  }

  get events() {
    return {
      'change .js-loan-type': 'loanTypeChanged',
      'click .js-mortgage-update': 'fieldChanged'
    };
  }

  onRecalc = $.noop;

  initialize() {
    this.data = this.model.attributes;
    this.template = template;
    super.initialize();

    // already wired up for us
    // this.listenTo(window.bt.events, 'mortgage-calculator', this.fire);

    this.price = this.$('input[name=price]');
    this.percentDown = this.$('input[name=downpayment]');
    this.downPaymentAmount = this.$('.downpayment-amount span');
    this.loanAmount = this.$('.js-loan-amount');
    this.loanType = this.$('.js-loan-type');
    this.interest = this.$('input[name=interest]');
    this.tax = this.$('input[name=tax]');
    this.taxPerMonth = this.$('.taxpermonth');
    this.paymentAmount = this.$('.js-payment-amount');
    this.isCanadian = document.documentElement.lang === 'en-CA';
  }

  /**
   * TODO: Desperately want a description
   *
   * Appears to only be called *externally*
   */
  recalc() {
    let monthlyTax;
    const price = parseInt(this.price.val().replace(/,/g, ''), 10);
    const percentDown = parseFloat(this.percentDown.val()) * 0.01;
    const amountDown = price * percentDown;
    const principal = price - amountDown;
    this.loanAmount.text(`$${this.format(principal)}`);

    const type = parseInt(this.loanType.val(), 10);
    let duration = type * 12;

    // ARM is calculated as a 30 year for the first 5 years
    if (this.loanType.data('special') === 'ARM') {
      duration = type * 6 * 12;
    }

    const interest = parseFloat(this.interest.val());
    const irate = (interest / 100) * (1.0 / 12.0);
    this.perMonth = Math.round((principal * irate) / (1 - (1 / Math.pow(1 + irate, duration))));

    if (!this.isCanadian) {
      const tax = parseFloat(this.tax.val());
      monthlyTax = Math.round((price * (tax * 0.01)) / 12);
      this.taxPerMonth.text(`($${this.format(monthlyTax)}/mo.)`);
    } else {
      monthlyTax = 0;
    }

    // Death and taxes man. Death and taxes.
    this.perMonth += monthlyTax;

    this.paymentAmount.html(`<b>$${this.format(this.perMonth)}</b> per month`);

    this.trigger('recalc');
    return this;
  }

  /**
   * TODO: Desperately want a description
   *
   * Appears to only be called *internally*
   */
  recalc2() {
    const price = parseInt(this.price.val().replace(/,/g, ''), 10);
    const percentDown = parseFloat(this.percentDown.val()) * 0.01;
    const interest = parseFloat(this.interest.val());
    const type = parseInt(this.loanType.val(), 10);
    const tax = parseFloat(this.tax.val());

    let duration = type * 12;

    // ARM is calculated as a 30 year for the first 5 years
    if (__guard__(this.loanType.find(':selected'), x => x.data('special')) === 'ARM') {
      duration = type * 6 * 12;
    }

    const result = this.calc(price, percentDown, duration, interest, tax, this.isCanadian);

    this.taxPerMonth.text(`($${this.format(result.monthlyTax)}/mo.)`);
    this.loanAmount.text(`$${this.format(result.principal)}`);
    this.paymentAmount.html(`<b>$${this.format(result.perMonth)}</b> per month`);

    this.trigger('recalc');
    return this;
  }

  // NOTE: this is strictly logic - keep jQuery, etc. out of here JF
  calc(price, percentDown, duration, interest, tax, isCanadian = false) {
    let monthlyTax;

    const amountDown = price * percentDown;
    const principal = price - amountDown;
    const irate = (interest / 100) * (1.0 / 12.0);
    let perMonth = Math.round((principal * irate) / (1 - (1 / Math.pow(1 + irate, duration))));

    if (isCanadian) {
      monthlyTax = 0;
    } else {
      monthlyTax = Math.round((price * (tax * 0.01)) / 12);
    }

    perMonth += monthlyTax;
    return { principal, perMonth, monthlyTax };
  }

  fieldChanged() {
    if (window.bt.utility.validateParsley('#mortgage-calculator-form')) {
      this.recalc2();
      this.logCalc();
    }
  }

  enableButton() {
    return $('.js-mortgage-update').removeAttr('disabled');
  }

  logCalc() {
    // only wanna log the first one
    if (this.logged) {
      return;
    }
    this.logged = true;

    window.bt.events.trigger('loancalculated', this.model.id);
  }

  loanTypeChanged(e) {
    e.preventDefault();
    const val = parseInt(this.loanType.val(), 10);
    let interest = 4.5;
    if ([15, 5].includes(val)) {
      interest = 3.0;
    }
    if (this.isCanadian) {
      interest = 3.4;
    }
    this.interest.val(interest);
    return this;
  }

  downPaymentChanged(e) {
    return e.preventDefault();
  }

  format(val) {
    return window.bt.global.addCommas(val);
  }

  /**
   * @deprecated
   */
  hide() {
    this.clearErrors();
    // eslint-disable-next-line
    App.body.removeClass('modal-open listing-inner-modal-open');
    if (this.modal != null) {
      this.modal.modal('hide');
    }
  }

  /**
   * @deprecated
   */
  clearErrors() {
    this.$('input[type=text], textarea').removeClass('error');
    $('.tooltip').remove(); // using tooltip('hide|destroy') sometimes doesn't work
  }

  /**
   * @deprecated
   */
  message(text, type = 'error') {
    return this.$('.js-alert')
      .removeClass('hide alert-error alert-success')
      .html(text)
      .addClass(`alert-${type}`);
  }
}

function __guard__(value, transform) {
  return typeof value !== 'undefined' && value !== null ? transform(value) : undefined;
}



// WEBPACK FOOTER //
// ./assets/js/src/backbone/Views/Modals/mortgage.js